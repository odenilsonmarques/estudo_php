<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

//instanciando o objeto
$usuarioDao = new UsuarioDaoMysql($pdo);

//recebendo os dados para realizar as alterações
$id= filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if($id && $nome && $email){
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuarioDao->update($usuario);
    header("Location: index.php");
    exit;
}else{
    //se der erro volta para o editar com id do usuario
    header("Location: edit.php?id=".$id);
    exit;
}
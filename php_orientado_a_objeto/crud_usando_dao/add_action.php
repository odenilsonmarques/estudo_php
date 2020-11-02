<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

//recebendo os dados
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $email){
    //verificando não encontrou um email, é adicionado um novo usuario
    if($usuarioDao->findEmail($email)===false){
        $addUsuario = new usuario();
        $addUsuario->setNome($nome);
        $addUsuario->setEmail($email);

        $usuarioDao->add($addUsuario);
        header("Location: index.php");
        exit;
    }else{
        header("Location: add.php");
        exit;
    }
}else{
    header("Location: add.php");
    exit;
}
?>
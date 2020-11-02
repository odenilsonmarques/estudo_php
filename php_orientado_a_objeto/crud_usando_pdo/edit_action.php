<?php
require 'config.php';

//recebendo os dados para realizar as alterações
$id_inf = filter_input(INPUT_POST, 'id_inf');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//verificando se dado foi passado
if ($id_inf && $nome && $email) {
    $sql = $pdo->prepare("UPDATE informacao SET nome = :nome, email = :email WHERE id_inf = :id_inf");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id_inf', $id_inf);
    $sql->execute();

    header("Location: index.php");
    exit;
    
}else{
    header("Location: add.php");
    exit;
}
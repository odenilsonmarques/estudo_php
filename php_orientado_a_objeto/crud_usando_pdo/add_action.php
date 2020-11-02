<?php
require 'config.php';

//recebendo os dados
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//verificando se dado foi passado
if ($nome && $email) {
    
    //verfificando se já tem um email cadastrado na base através do proprio sistema
    $sql = $pdo->prepare("SELECT * FROM informacao WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    //verificando o resultado da consulta a cima
    if($sql->rowCount() ===0 ){

        //preparando o query
        $sql = $pdo->prepare("INSERT INTO informacao (nome, email) VALUES (:nome, :email)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        //executando a query
        $sql->execute();
        header("Location:index.php");
        exit;
    }else{
        header("Location: add.php");
        exit;
    }
}else{
    header("Location: add.php");
    exit;
}
<?php
$db_name = 'db_usuario';
$db_host = '127.0.0.1';
$db_root = 'root';
$db_password = '';

try{
    $pdo = new PDO("mysql:dbname=".$db_name."; host=".$db_host, $db_root, $db_password);
    //echo "Banco de dados conectado! ";
}catch(exception $e){
    echo "erro ao conectar ".$e->getMessage();
}
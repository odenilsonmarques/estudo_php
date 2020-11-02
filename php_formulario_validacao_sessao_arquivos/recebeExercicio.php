<?php
session_start();
$nome = filter_input(INPUT_POST,'nome');

if($nome){
    echo "NOME EH :".$nome;
    $_SESSION['name'] = "<h3>".$nome."</h3>";
}else{
    header("Location:exercicio1.php");
}


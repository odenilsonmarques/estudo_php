<?php
session_start();
require('headerExercicio.php');

if(($_SESSION['name'])){
    echo $_SESSION['name']."<a href='encerraSessao.php'>Sair</a>";
}else{
    header("Location:exercicio1.php");
    session_destroy();
}
?>
<?php
require 'config.php';

//recenbendo id_inf
$id_inf = filter_input(INPUT_GET, 'id_inf');

//verificando se o id_inf foi enviado
if($id_inf){
    
    $sql = $pdo->prepare("DELETE FROM informacao WHERE id_inf = :id_inf");
    $sql->bindValue(':id_inf', $id_inf);
    $sql->execute();
}

header("Location:index.php");
exit;


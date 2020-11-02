<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

//instanciando o objeto
$usuarioDao = new UsuarioDaoMysql($pdo);
//recenbendo id_inf
$id = filter_input(INPUT_GET, 'id');

//verificando se o id_inf foi enviado
if($id){
    
  $usuarioDao->delete($id);

}

header("Location:index.php");
exit;


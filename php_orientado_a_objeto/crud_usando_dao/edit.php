<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

//instanciando o objeto
$usuarioDao = new UsuarioDaoMysql($pdo);
//declarando um usuario como false, caso não encontre o id_info ele não entra no primeiro if, mas sim no segundo
$infUsuario = false;
//recenbendo id_inf
$id_inf = filter_input(INPUT_GET, 'id');

//verificando se o id_inf foi enviado
if($id_inf){
    //caso o id tenha sido enviado o infUsuario passa a ser verdadeiro
    $infUsuario = $usuarioDao->findId($id_inf);
}
if($infUsuario === false){
    header("Location:index.php");
    exit;
}

?>

<h1>Editar Usuário</h1>

<form method="POST" action="edit_action.php">
    <label>nome:</label>
    <input type="text" name="nome" value="<?=$infUsuario->getNome();?>"/><br/><br/> 

    <label>email:</label>
    <input type="email" name="email" value="<?=$infUsuario->getEmail();?>"/><br/><br/> 

    <input type="hidden" name="id" value="<?=$infUsuario->getId();?>"/>

    <input type="submit" value="salvar">
</form>
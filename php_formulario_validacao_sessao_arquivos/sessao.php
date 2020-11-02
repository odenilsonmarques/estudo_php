<?php
session_start();
require('header.php');

//exibindo o que foi salvo na variavel $_SESSAO no arquivo sessaoRecebedor.php, logo depois de exibir é limpado a mensagem
//se aviso existir é exibido o texto armazenado na sessao
if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>

<form  method="POST" action="sessaoRecebedor.php">
    <label>NOME:</label><br/>
    <input type="text" name="nome"><br/><br/>

    <label>EMAIL:</label><br/>
    <input type="text" name="email"><br/><br/>

    <input type="submit" value="Enviar">
</form>
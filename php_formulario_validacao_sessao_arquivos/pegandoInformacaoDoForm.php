<?php
require('header.php');
?>

<form  method="POST" action="recebedor.php">
    <label>NOME:</label><br/>
    <input type="text" name="nome"><br/><br/>

    <label>EMAIL:</label><br/>
    <input type="text" name="email"><br/><br/>

    <input type="submit" value="Enviar">
</form>
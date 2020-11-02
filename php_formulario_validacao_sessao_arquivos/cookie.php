<?php
require('headerCookie.php');
?>

<form  method="POST" action="cookieRecebedor.php">
    <label>NOME:</label><br/>
    <input type="text" name="nome"><br/><br/>

    <label>EMAIL:</label><br/>
    <input type="text" name="email"><br/><br/>

    <input type="submit" value="Enviar">
</form>

<a href="apagarCookie.php">apagar cookie</a>
<h1>Cabeçalho</h1><hr/>
<?php

//exibindo o cookie
// a funcao isset(verifica se o campo foi setado)
if(isset($_COOKIE['nome'])){
    $nome = $_COOKIE['nome'];
    echo "<h2>".$nome."</h2>";
}


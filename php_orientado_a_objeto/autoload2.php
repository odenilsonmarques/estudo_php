<?php
spl_autoload_register(function($class){

    //DIR é o diretorio raiz 
    $baseDir = __DIR__.'/classes2/';
    //echo $baseDir. "<br><br>";

    //no php barra para a direita é referente a pasta
    //no php barra para a esquerda é referente a arquivo
    //no php duas barras para a esquerda é como se fosse uma barra para a esquerda e se refere a uma barra para a direita
    $file = $baseDir.str_replace('\\', '/', $class).'.php';

    if(file_exists($file)){
        require $file;
    }
});
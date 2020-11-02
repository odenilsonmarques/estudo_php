<?php
//o codigo abaixo é forma normal de chamar uma classe
//require 'classes/MatematicaAutoLoad.php';

//o codigo abaixo permite se ter uma coleção de classe em um diretorio, que serão chamadas através da funcão abaixo, sem a necessidade de exportar varias classes
spl_autoload_register(function($class){
    //echo "O nome da classe é :".$class."<br><br>";
    //require 'classes/'.$class.'.php';

    //verificando se o arquivo existe
    if(file_exists('classes/'.$class.'.php')){
        require 'classes/'.$class.'.php';
    }
    
});
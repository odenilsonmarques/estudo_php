<?php
//funcao recursiva, esta funcao retorna ela mesma

function dividir($numero){
    $metade = $numero / 2;
    echo $metade."<br/>";

    if(round($metade) > 0){
        dividir($metade);
    }
}
dividir(100);
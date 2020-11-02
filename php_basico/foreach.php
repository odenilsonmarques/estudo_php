<?php

$ingredientes = [
    'açucar',
    'farinha',
    'leite',
    'ovo'
];

echo '<h2>Ingredientes do Bolo - valores</h2>';
foreach($ingredientes as $valor){
    echo "ingrediente :".$valor."<br/>";
}

echo '<h2>Ingredientes do Bolo - chave  & valores</h2>';
foreach($ingredientes as  $chave =>$valor ){
    echo "ingrediente :".$chave." - ".$valor."<br/>";
}
<?php
//criando a funcao com parametro e armazenando o valor na variavel $adicao, logo depois é retornado o resultado  
function somar($n1, $n2){
    $adicao = $n1 + $n2;
    return $adicao;
}
//executando a funcao, logo depois passando os valores a serem passados no parametro
$total = somar(10, 5);
echo $total;
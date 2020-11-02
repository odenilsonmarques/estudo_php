<?php

//funcao para retornar o resultado positivo (valor absoluto) de um numero
$numero = -2.3;
echo abs($numero)."<br/><br/>";

//funcao PI
echo pi()."<br/><br/>";

//funcao para arredondar para baixo
echo floor(2.6)."<br/><br/>";

//funcao para arredondar para cima
echo ceil(2.6)."<br/><br/>";

//funcao para arredondar o numero mais proximo
echo round(3.6)."<br/><br/>";

//funcao para retornar um numero aleatorio
$aleatorio = rand(0, 9);
echo $aleatorio."<br/><br/>";

//funcao para retornar o maior numero de uma lista
$lista = [1,2,3,4,5];
echo max($lista)."<br/><br/>";

//funcao para retornar o menor numero de uma lista
$lista = [1,2,3,4,5];
echo min($lista);
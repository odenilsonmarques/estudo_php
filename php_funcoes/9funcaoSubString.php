<?php
$nome = ' odenilson  ';

//a funcao strim retira os espaços extra
$nomeLimpo = trim($nome);
echo $nomeLimpo."<br/>";
//a funcao strlen retorna a quantidade de caracteres
echo "quantidade de caracteres :".strlen($nomeLimpo)."<br/>";

echo'---------------------------------------------------------------<br/>';

$nomeSujo = $nome;
echo $nomeSujo."<br/>";
//a funcao strlen retorna a quantidade de caracteres
echo "quantidade de caracteres :".strlen($nomeSujo)."<br/><br/>";

echo'---------------------------------------------------------------<br/>';

echo'transformando string em minuscula<br/>';
//a funcao srtlower transforma a string em minuscula
$nomeCompleto = 'ODENILSON MARQUES';
echo strtolower($nomeCompleto)."<br/>";

echo'---------------------------------------------------------------<br/>';

echo'transformando string em maiuscula<br/>';
//a funcao srtlower transforma a string em minuscula
$nomeCompleto2 = 'odenilson marques';
echo strtoupper($nomeCompleto2)."<br/>";

echo'---------------------------------------------------------------<br/>';

echo'retornando a primeira letra de uma palavra em maiuscula<br/>';
//a funcao ucfirst converte a primeira letra de uma palavra em maiuscula
$nomeCompleto22 = 'odenilson';
echo ucfirst($nomeCompleto22)."<br/>";

echo'---------------------------------------------------------------<br/>';

echo'retornando a primeira letra de varias  palavra em maiuscula<br/>';
//a funcao ucwords converte as primeira letra de varias palavra em maiuscula
$nomeCompleto22 = 'odenilson marques';
echo ucwords($nomeCompleto22)."<br/>";


echo'---------------------------------------------------------------<br/>';

echo'substituir um nome por outro<br/>';
//a funcao srt_replace substitui um nome por outro
$nomeCompleto3 = 'odenilson marques';
echo str_replace('marques','araujo',$nomeCompleto3)."<br/>";

echo'---------------------------------------------------------------<br/>';

echo'pegar apenas algumas letras<br/>';
//a funcao substr retorna apenas algumas letras, conforme for passado no parametro
$nomeCompleto4 = 'odenilson marques';
$nomeLetras =  substr($nomeCompleto4,0,3)."<br/>";
echo $nomeLetras;

echo'---------------------------------------------------------------<br/>';

echo'transformando um conjunto de string em array, usando a funcao explode. Nessa funcao o primeiro parametro passado é o que se procura, ao encontrar esse parametro este é eliminado, nesse caso retira-se o espaço, pois foi o primeiro parametro passado<br/>';
//a funcao substr retorna apenas algumas letras, conforme for passado no parametro
$nomeCompleto5 = 'odenilson marques Araujo';
$nomeExplode =  explode(' ',$nomeCompleto5);
print_r($nomeExplode)."<br/>";

echo'<br>---------------------------------------------------------------<br/>';

echo'formatando numero<br/>';
//a funcao format_numb retorna o numero formatado
$numero = 12456.12;
echo 'R$'.number_format($numero,2,',','.');

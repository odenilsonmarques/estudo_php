<?php
/*
    nota: em variaveis com mais de um nomes usar padrão kamikaze
    ex: $nomeMasculino
    ex: $nomeFeminino
*/

//qualquer texto dentro de aspa, é do tipo string
$nome = "olá";

//sem aspas refere-se a numero
$idade = 34;

//sem aspas pode ser valores ja esperados pelo php, (boolean, null, vazio)
$usandoPhpTrue = true;
$usandoPhpFalse = false;
$vazio = null; //dessa forma é uma variavel vazia, não é considerada string
$vazioDois = ''; //dessa forma é uma variavel sem valor algum, nesse caso é uma STRING sem nenhum valor

echo"seu nome é: ".$nome."<br>";
echo"sua idade é: ".$idade."<br>";
echo"está usando php ? ".$usandoPhpTrue."<br>";
echo"está usando php ? ".$usandoPhpFalse."<br>";






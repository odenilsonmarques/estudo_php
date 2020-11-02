<?php

/*
notas
- o php assume que o texto declarado entre aspas simples, é o um texto ou numeros a ser exibido. ou seja não reconheçe o que está dentro das apas simples como variavel
- o php assume que o texto declarado entre aspas duplas, é o valor da (variavel) a ser exibida. ou seja reconheçe o que está dentro das aspas duplas como variavel
*/


$nome = 'Odenilson';
$sobreNome = 'Araujo';

//uma das formas de concatenar variaveis, no entanto existe outras formas
//$nomeCompleto = $nome.$sobreNome;
$nomeCompleto = "$nome $sobreNome";

echo $nomeCompleto;
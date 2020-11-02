<?php

$nome = "odenilson";
$sobreNome = "Araujo";

$nomeCompleto = $nome;

$nomeCompleto .=$sobreNome ?? ' sem sobre nome';

echo $nomeCompleto;

/*
condicaionalCao, pergunta se a varialvel sobreNome existe, se existir é exibido o valor da mesma com o valor da variavel nome
se não existir é exibido o valor da variavel nome somente

obs: este recurso é disponivel a partir do php 7.4 
*/
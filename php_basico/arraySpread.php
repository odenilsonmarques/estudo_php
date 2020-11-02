<?php

//utilizando o array spread, este recurso ficou disponivel a partir do php 7.4
//esse recurso junta as lista em um só e faz a propagacao dos valores

$lista1 = ['bia','kiki','gabs'];
$lista2 = [...$lista1, 'ode','jojo','enzo'];
//echo $lista2[0];

//outra forma de usar o recurso spread
$listaPrimeirosNomes = ['odenilson','bia'];
$listaSegundoNomes = ['marques','maria'];
$listaTerceiroNomes = [...$listaPrimeirosNomes, $listaSegundoNomes];

print_r($listaTerceiroNomes);
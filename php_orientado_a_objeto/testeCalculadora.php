<?php
require 'Calculadora.php';

$cal = new Calculadora();

$cal->add(12);
$cal->add(2);
$cal->sub(1);
$cal->multiplica(3);
$cal->divide(2);
$cal->add(0.5);

echo "O total é de  :".$cal->getNumero()."<br/>";


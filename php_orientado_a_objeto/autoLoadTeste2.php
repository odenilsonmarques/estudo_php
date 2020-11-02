<?php
require 'autoload2.php';
use \matematica\Matematica;
use \geografia\Geografia;

$mt = new Matematica();
echo $mt->somar(2, 3)."<br><br>";


$gf = new Geografia();
echo $gf->capital();


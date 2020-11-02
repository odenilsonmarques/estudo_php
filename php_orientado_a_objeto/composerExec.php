<?php
//usando o comando abaixo para utilizar o autoload do composer
require "vendor/autoload.php";

use \matematica\Matematica;

$mt = new Matematica();
echo $mt ->somar(10,20);
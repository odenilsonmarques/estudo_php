<?php
require 'autoload.php';

$mt = new MatematicaAutoLoad();
echo $mt ->somar(20,10)."<br><br>";

$cc = new CienciaAutoLoad();
echo $cc->mensagem();

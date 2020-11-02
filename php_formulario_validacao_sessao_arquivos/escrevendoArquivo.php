<?php

//o codigo abaixo vai escrever em um arquivo que ele mesmo vai criar,chamado de nome.txt
$texto = "Odenilson marques araujo";
file_put_contents('nome.txt', $texto);
echo 'arquivo criado com sucesso!';


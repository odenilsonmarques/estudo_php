<?php

$numeros = [1,2,3,4];
//esta funcao informa quanto itens tem no array
echo'usando a funcao count<br/>';
echo'Resultado ' .count($numeros)."<br/>";
echo'---------------------------------------<br/><br/>';

//esta funcao array_diff, esta funcao exibe a diferença entre a 1 e a 2 lista
echo'usando a funcao array_diff<br/>';
$lista = ['odenilson','bia', 'luan','patricia'];
$aprovados = ['bia','patricia'];
$reprovados = array_diff($lista, $aprovados);
print_r($reprovados);
echo'<br>---------------------------------------------------------------<br/>';


//esta funcao array_filter, flitrar somente os numeros menores que 5
echo'usando a funcao array_filter<br/>';
$numeros2 = [1,2,3,4,5,6];
$filtrados = array_filter($numeros, function($item){
    if($item<5){
        return true;
    }else{
        return false;
    }
});
print_r($filtrados);
echo'<br>---------------------------------------------------------------<br/>';

//esta funcao array_map, mapea os valores e nesse caso multiplica cada valor po 2
echo'usando a funcao array_map<br/>';
$numeros3 = [1,2,3,4,5,6];
$dobrados = array_map(function($item){
   return $item * 2;
}, $numeros3);

print_r($dobrados);



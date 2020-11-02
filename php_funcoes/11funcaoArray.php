<?php
echo'usando a funcao array_pop<br/>';
//esta funcao remove o ultimo numero
$numeros = [1,2,3,4];
array_pop($numeros);
print_r($numeros);
echo'<br>---------------------------------------<br/><br/>';


echo'usando a funcao array_shift<br/>';
//esta funcao remove o o primeiro numero
$numeros2 = [1,2,3,4];
array_shift($numeros2);
print_r($numeros2);
echo'<br>---------------------------------------<br/><br/>';

echo'usando a funcao in_array<br/>';
//esta funcao procura pelo valor informado
$numeros3 = [1,2,3,4];
    if(in_array(011,$numeros3)){
        echo 'existe!';
    }else{
        echo 'não existe!';
    }
echo'<br>---------------------------------------<br/><br/>';

echo'usando a funcao in_search<br/>';
//esta funcao procura pelo valor informado e retorna a posicao do numero caso o encontre
$numeros4 = [1,2,3,4];
$posicao = array_search(4,$numeros4);
echo $posicao;
echo'<br>---------------------------------------<br/><br/>';

echo'usando a funcao sort<br/>';
//esta funcao ordena os numeros
$numeros5 = [1,4,2,3];
sort($numeros5);
print_r($numeros5);
echo'<br>---------------------------------------<br/><br/>';

echo'transformando um array em uma string, usando a funcao implode<br/>';
//esta funcao une os valore do array e forma uma string, nesse caso usaou o espaco para fazer uma só string
$nomes = ['fred','marques','araujo'];
$nome = implode(' ', $nomes);
echo $nome;
echo'<br>---------------------------------------<br/><br/>';
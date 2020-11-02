<?php
/*
anotacoes
1ª -> o php trabalha com datas no formato de milissegundos.

2ª -> o php toma como referencia a data zero. Para o php, a data zero teve inicio no ano de 01/01/1970

3ª -> pode acontecer da hora retornada ser diferente da hora que está no computador, pois o servidor do php
retorna a hora baseado no horario de Greenwich, que tem o fuso de 3 horas a mais do que o fuso horario do Brasil.

4ª -> a hora padrao do mundo é baseada no horario de Greenwich que fica no reino unido, e dependendo da sua localizacao
essa hora pode sofrer um aumento ou uma diminuicao. No caso Brasil, o nosso fuso horario está tres horas a menos do que o fuso horarios
de Greenwich 

5ª -> quando se trabalha com data gravada em banco de dados, a mesma sempre é salva no padrao internacional
ex: date('Y-m-d')

6ª -> padrao americano ex: date('Y-d-m')

7ª -> sempre que for salvar uma data, sempre salvar no formato interncional
*/

// o código abaixo retorna a data atual no formato de millissegundos, a partir da data zero 
echo"retonando a data no formato de milissegundos<br/>";
echo time()."<br/>";
echo"---------------------------------------------<br/>";

// o código abaixo retorna a data atual no formato de date(dia/ mes/ ano).
// lemrar que o Y maiusculo é para ser exibido os quatros digitos do ano, se fosse y minusculo seria exibido apenas os dois ultimos digitos do ano
echo"retonando a data no formato date<br/>";
echo date('d/m/Y')."<br/>";
echo"---------------------------------------------<br/>";

// o código abaixo retorna a data e a hora atual no formato de date.
echo"retonando a data e a hora no formato date<br/>";
echo date('d/m/Y H:i:s')."<br/>";
echo"---------------------------------------------<br/>";

// o código abaixo retorna o dia atual no formato de date.
echo"retonando o dia no formato date<br/>";
echo date('d')."<br/>";
echo"---------------------------------------------<br/>";

// o código abaixo retorna o mes atual no formato de date.
echo"retonando o mes no formato date<br/>";
echo date('m')."<br/>";
echo"---------------------------------------------<br/>";

// o código abaixo retorna o ano atual no formato de date.
echo"retonando o ano no formato date<br/>";
echo date('Y')."<br/>";
echo"---------------------------------------------<br/>";

// o código abaixo retorna o mes por extenso de uma data no formato de date. para deixar menor o nome do mes basta usar a letra M em maiusculo
echo"retonando o mes por extenso no formato date<br/>";
echo date('F')."<br/>";
echo"---------------------------------------------<br/>";

// o código abaixo retorna o mes por numero de uma data no formato de date.
echo"retonando o mes por numero no formato date<br/>";
echo date('m')."<br/>";
echo"---------------------------------------------<br/>";

//passando a data no formato internacional e exibido-a no formato brasileiro
echo"exibindo a data no formato brasileiro<br/>";
$dataInternacional = '2020-09-26';
echo date('d / m / Y',strtotime($dataInternacional));

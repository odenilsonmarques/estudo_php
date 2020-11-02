<?php

//criando uma funcao anonima. Funcao anônima não tem nome e geralmente está atrelada há uma variavel, e sempre termina com ponto e vírgula
$porcentagem = function(int $valor){
    return $valor * 0.1;
};
//para executar a funcao, deve-se passar o valor da variavel que armazenou a funcao
echo $porcentagem(90);


<?php
//A FUNCAO FILTER_INPUT, VERIFICA O TIPO DE METODO USADO E SE O CAMPO(VARIAVEL) FOI DEFINIDO. POIS RETORNA NULL CASO NÃO DEFINIDO, E FALSE SE O FILTRO FALHAR, E TRUE CASO DE CERTO
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

if($nome && $email){
    echo "NOME :".$nome."<br/>";
    echo "EMAIL :".$email;
}else{
    header("Location: pegandoInformacaoDoForm.php");
    exit;
}

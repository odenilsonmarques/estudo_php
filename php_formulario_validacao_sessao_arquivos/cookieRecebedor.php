<?php
//A FUNCAO FILTER_INPUT, VERIFICA O TIPO DE METODO USADO E SE O CAMPO(VARIAVEL) FOI DEFINIDO. POIS RETORNA NULL CASO NÃO DEFINIDO, E FALSE SE O FILTRO FALHAR, E TRUE CASO DE CERTO
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

if($nome && $email){
    //setando um cookie (Se deseja setar um cookie, é necessario fazer isso antes da exibição de qualquer conteúdo)
    //nome do cookie(nome), onde ele será guardado($nome), tempo de duraca do cookie(time)
    $tempo = time() + (86400 * 30);
    setcookie('nome', $nome,$tempo);

    echo "NOME :".$nome."<br/>";
    echo "EMAIL :".$email;
}else{
    header("Location: pegandoInformacaoDoForm.php");
    exit;
}


<form method="POST">
    <label>NOME</label><br/>
    <input type="text" name="nome">
    <input type="submit" value="salvar">
</form>

<?php
//lendo o arquivos de nomes
$nomes = file_get_contents('arquivoDeLeitura.txt');

$nome = filter_input(INPUT_POST,'nome');

file_put_contents('novoNome.txt',$nome);

echo '<ul>';
    echo '<li>'.$nomes.'</li>';
echo '</ul>';

?>
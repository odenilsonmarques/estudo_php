<?php
require 'config.php';
//criando uma lista vazia que está recebendo um array
$lista = [];
//usando apenas query, pois não estou enviando dados
$sql = $pdo->query("SELECT * FROM informacao");
//verificando se a a query acima está retornando algum array, caso sim, esse array é armazenado na lista 
if($sql->rowCount()>0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<a href="add.php">Adicionar usuário</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>  
    <?php foreach($lista as $usuario): ?>
    <tr>
        <td><?=$usuario['id_inf'];?></td>
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['email'];?></td>
        <td>
            <a href="edit.php?id_inf=<?=$usuario['id_inf']?>">[editar]</a>
            <a href="del.php?id_inf=<?=$usuario['id_inf']?>" onclick="return confirm('DESEJA CONFIRMAR A EXCLUSÃO ?')">[excluir]</a>
        </td>
    </tr>
    <?php endforeach; ?>
   
        
</table>

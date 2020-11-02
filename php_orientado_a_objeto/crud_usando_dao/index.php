<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

//instanciando o objeto
$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->list();
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
        <td><?=$usuario->getId();?></td>
        <td><?=$usuario->getNome();?></td>
        <td><?=$usuario->getEmail();?></td>
        <td>
            <a href="edit.php?id=<?=$usuario->getId();?>">[editar]</a>
            <a href="del.php?id=<?=$usuario->getId();?>" onclick="return confirm('DESEJA CONFIRMAR A EXCLUSÃO ?')">[excluir]</a>
        </td>
    </tr>
    <?php endforeach; ?>
   
        
</table>

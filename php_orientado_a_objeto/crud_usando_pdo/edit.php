<?php
//puxando o banco pq vai ser preciso carregar as informações no inputs
require 'config.php';

//criando uma lista vazia que está recebendo um array
$info = [];

//recenbendo id_inf
$id_inf = filter_input(INPUT_GET, 'id_inf');

//verificando se o id_inf foi enviado
if($id_inf){
    //usando o prepare pq estou enviando os dados refentes ao id_inf
    $sql = $pdo->prepare("SELECT *FROM informacao WHERE id_inf = :id_inf");
    $sql->bindValue(':id_inf', $id_inf);
    $sql->execute();

    //verificando se encotrou as informações referente ao id_inf enviado
    if($sql->rowCount()>0){
        //if foi encontrado a lista é preenchida
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location:index.php");
        exit;
    }

}else{
    header("Location:index.php");
    exit;
}

?>

<h1>Editar Usuário</h1>

<form method="POST" action="edit_action.php">
    <label>nome:</label>
    <input type="text" name="nome" value="<?=$info['nome'];?>"/><br/><br/> 

    <label>email:</label>
    <input type="email" name="email" value="<?=$info['email'];?>"/><br/><br/> 

    <input type="hidden" name="id_inf" value="<?=$info['id_inf'];?>"/>

    <input type="submit" value="salvar">

</form>
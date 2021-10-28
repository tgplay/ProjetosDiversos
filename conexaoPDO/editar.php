<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET,'id');
if($id){

    //quando enviar dados usar o prepare
    $sql = $pdo->prepare("SELECT *FROM usuarios WHERE id = :id");

    //agora vamos substituir os dados
    $sql->bindValue(':id', $id);
    //nunca esqueça de sempre executar
    $sql->execute();
    
    if($sql->rowCount() > 0){

        //Preenchendo com as informações do usuário
        $info = $sql->fetch(PDO::FETCH_ASSOC);

    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
<h1>Editar Usuário</h1>
<form method="POST" action="editAction.php">
    <input type="hidden" name="id" value="<?=$info['id'];?>">
    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?=$info['nome'];?>">
    </label><br/><br/>

    <label>
        Email:<br/>
        <input type="email" name="email" value="<?=$info['email'];?>">
    </label><br/><br/>

    <input type="submit" value="Salvar">    
</form>
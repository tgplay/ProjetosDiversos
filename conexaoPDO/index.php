<?php 
require 'config.php'; 

$lista = [];

//quando não envia dado pode usar o query normalmente
$sql = $pdo->query("SELECT * FROM usuarios");
//verificar se tem usuários na tabela e se tiver exibir na tabela
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="add.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>   
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td style="text-align: center;">
                <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Deseja realmente excluir?')">[ Excluir ]</a>
            </td>  
        </tr>               
    <?php endforeach; ?>
</table>
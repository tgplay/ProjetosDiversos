<?php
require('header.php');
?>

<form method="POST" action="recebedor.php">
    <label>
        Nome:<br/>
        <input type="text" name="nome">
    </label>
    <br/>
    <br/>
    <label>
        Idade:<br/>
        <input type="text" name="idade">
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar">
</form>
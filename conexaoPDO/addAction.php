<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        //PDOStatement - Montando a query aos poucos

        $sql = $pdo->prepare("INSERT INTO usuarios(nome, email) VALUES (:nome, :email)");
        $sql->bindValue(':nome', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();

        header("Location: index.php");
        exit;
    } else {
        header("Location: add.php");
        exit;
    }
} else {
    header("Location: add.php");
    exit;
}

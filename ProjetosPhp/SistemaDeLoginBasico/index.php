<?php
session_start();

//Se existir a sessão e ela não estiver vazia
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    echo "Você está Logado: Área restrita...";
} else {
    //caso contrario redirecionar para pagina de login
    header("Location: login.php");
}
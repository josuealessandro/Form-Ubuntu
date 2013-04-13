<?php
session_start();

if(isset($_GET['sair'])){
    session_destroy();
    header('Location:../index.php');
}

include 'principal.class.php';

$principal = new Principal;

$conn = $principal->conn();

$login = $_POST['login'];
$senha = $_POST['senha'];

$dados = $principal->login($conn, $login, $senha);

if(count($dados) > 0){
   $_SESSION['usuario']= $dados;
}

$conn = NULL;
header('Location:../index.php');
?>

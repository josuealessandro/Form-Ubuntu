<?php
session_start();

if(count($_SESSION['usuario'])<=0){
    header('Location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/default.css" rel="stylesheet" />
<title>ADM Form Ubuntu SP</title>
<script src="js/jquery.js"></script>
<script src="js/functions.js"></script>
</head>
<body>
    <div id="container">
        <h1>Administração Form</h1>
        <p>Olá <?=utf8_encode($_SESSION['usuario'][0]['nome'])?>, <a href="include/login.php?sair">Sair</a></p>
        <ul>
            <li><a href="javascript:;" onclick="abrePagina('conteudo','include/home.php','')">Início</a></li>
            <li><a href="javascript:;" onclick="abrePagina('conteudo','include/eventos.php','')">Eventos</a></li>
            <li><a href="javascript:;" onclick="abrePagina('conteudo','include/inscritos.php','')">Inscritos</a></li>
        </ul>
        <div id="conteudo"></div>
    </div>
</body>
</html>
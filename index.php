<?
session_start();

if(count($_SESSION['usuario'])>0){
    header('Location:admin.php');
}

include 'include/principal.class.php';

$principal = new Principal;

$conn = $principal->conn();
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
        <h1 class="centralizado afastar_top">Adm Form Ubuntu SP</h1>
        <div id="area_login">
            <form action="include/login.php" method="post">
                <p>
                    <span>Login</span>
                    <input type='email' name="login" id="login" />
                </p>
                <p>
                    <span>Senha</span>
                    <input type="password" name="senha" id="senha" />
                </p>
                <p>
                    <input type="submit" value="Entrar" />
                </p>
            </form>
        </div>
    </div>
</body>
</html>
<? $conn = NULL; ?>
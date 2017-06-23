<?php
    //verificar se esta logado
    session_start();

    $existe = isset($_SESSION['esta_logado']);

    if ($existe == false && $_SESSION['esta_logado'] == false){
        //redirecionar
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=logout" class="sair">sair</a>

		<img src="http://s2.glbimg.com/rOLr8MkPrbOeIdSAGCECwFUQKkw=/0x0:300x225/300x225/s.glbimg.com/jo/g1/f/original/2014/10/29/temer.jpg" alt="" width="200" height="auto">
		<h3>Bem vindo <?=$_SESSION['nome'];?>! </h3>
	</div>

</body>
</html>

<?php
    session_start();

    $lista_usuarios = file_get_contents("usuarios.json");

    function login(){
        $lista_usuarios =json_decode(file_get_contents("usuarios.json"), true);

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        foreach ($lista_usuarios as $user){

            if($login == $user['login'] and $senha == $user['senha']){

                $_SESSION['nome']        = $user['nome'];
                $_SESSION['esta_logado'] = true;

                header("Location: index.php");

            }
        }

        if (!$_SESSION['esta_logado']) {
            //redirecionar
            header("Location: login.php");

        }
    }

    function logout(){
        session_destroy();

        header("Location: login.php");
    }


    switch ($_GET['acao']){
        case 'login':
            login();
            break;

        case 'logout':
            logout();
            break;

    }
    //ROTAS
<?php
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    if (($login == 'admin.live@newdirections.com') && ($senha == '@liveup1234')){
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
        header("Location: area-restrita/index-adm.php");
    }
    else{
        header("Location: index.php");
    }

?>
<?php
    session_start();
    if (($_SESSION['login-session'] != 'admin.live@newdirections.com') || 
        ($_SESSION['senha-session'] != '@liveup1234')){
            header("Location: ../index.php");
        }
?>
<?php
    if(!isset($_SESSION)){ //se já não tiver uma $_SESSION
        session_start(); //Inicia a session
    }

    if(!isset($_SESSION['user'])){ //se a pessoa não estiver logada ocorre:
        die(header("Location: ../../pages/login.html")); //leva para a pag de login
    } 
?>
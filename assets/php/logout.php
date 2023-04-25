<?php
    if(!isset($_SESSION)){ //se a session não estiver iniciada
        session_start();//inicia ela
    }

    session_destroy(); //destroi ela
    header("Location: ../../pages/index.html"); //leva para o index
?>
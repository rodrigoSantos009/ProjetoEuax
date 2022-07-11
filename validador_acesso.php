<?php

    session_start();

    if(!isset($_SESSION['connected']) || $_SESSION['connected'] != 'YES') {
        header('Location: login.php?login=error2');
    }

?>
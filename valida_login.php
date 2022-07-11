<?php

    session_start();

    $user_connected = false;

    $users_app = array(
        array('email' => 'adm@adm.com.br', 'password' => '123')
    );

    foreach($users_app as $user) {

        if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
            $user_connected = true;
        }
        
    }

    if($user_connected) {
        $_SESSION['connected'] = 'YES';
        header('Location: home.php');
    } else {
        $_SESSION['connected'] = 'NO';
        header('Location: login.php?login=error');
    }

?>
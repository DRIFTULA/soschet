<?php
    session_start();

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $password = md5($password."demidprobro");

    $mysql = new mysqli('localhost', 'root', 'root', 'bd_regist');
    
    $userlog = $mysql->query("SELECT * FROM `sos_set` WHERE `login` = '$login'");
    $result = $mysql->query("SELECT * FROM `sos_set` WHERE `password` = '$password'");

    $user1 = $userlog->fetch_assoc();
    if(count($user1) == 0) {
        $_SESSION['messagelog'] = 'Такой пользователь не найден';
        header('Location: Регистрация.php');
        exit;
    }
    $user2 = $result->fetch_assoc();
    if(count($user2) == 0) {
        $_SESSION['messagepass'] = 'Неверный пароль';
        header('Location: Регистрация.php');
        exit;
    }
    setcookie('user', $user1['login'], time() + 3600, "/");
    
    $mysql->close();
    header('Location: index.php');
    
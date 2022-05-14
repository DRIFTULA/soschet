<?php
    session_start();

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $password_confirm = filter_var(trim($_POST['password_confirm']), FILTER_SANITIZE_STRING);

    if (mb_strlen($email) > 50) {
        $_SESSION['message1'] = 'Почта должна быть меньше 32 символов';
        header('Location: Регист.php');
        exit;
    }
    else if (mb_strlen($login) <5 || mb_strlen($login) > 50) {
        $_SESSION['message2'] = 'Имя пользователя должно быть больше 5, но меньше 32 символов';
        header('Location: Регист.php');
        exit;
    }
    else if (mb_strlen($password) < 5 || mb_strlen($password) > 32) {
        $_SESSION['message3'] = 'Пароль должно быть больше 5, но меньше 32 символов';
        header('Location: Регист.php');
        exit;
    }
    else if ($password !== $password_confirm) {
        $_SESSION['message4'] = 'Пароли не совпадают';
        header('Location: Регист.php');
        exit;
    }
    else {
        $_SESSION['message5'] = 'Авторизация прошла успешно. <a href="Регистрация.php">Авторизуйтесь</a>';
        header('Location: Регист.php');
    }

    $password = md5($password."demidprobro");

    $mysql = new mysqli('localhost', 'root', 'root', 'bd_regist');
    $mysql->query("INSERT INTO `sos_set`(`email`, `login`, `password`)
    VALUES('$email', '$login', '$password')");

    $mysql->close();
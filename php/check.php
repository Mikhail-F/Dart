<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Фильтрует логин
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING); // Фильтрует имя
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); // Фильтрует пароль

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "Не допустимая длина логина!";
        exit();
    }
    else if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
        echo "Не допустимая длина имени!";
        exit();
    }
    else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6){
        echo "Не допустимая длина пароля! (от 2 до 6 символов)";
        exit();
    }

    $pass = md5($pass."wojg9pwg2525"); // Хэшируем пароль

    $mysql = new mysqli('localhost', 'root', '', 'Dart'); // Подключение к базе дынных
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

    header('Location: /Dart/php/reg.php'); // Переадресация



















?>
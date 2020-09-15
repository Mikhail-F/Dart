<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Фильтрует логин
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); // Фильтрует пароль

    $pass = md5($pass."wojg9pwg2525"); // Хэшируем пароль

    $mysql = new mysqli('localhost', 'root', '', 'Dart'); // Подключение к базе дынных
    $result = $mysql->query("SELECT * FROM  `users` WHERE `login` = '$login' AND `pass` = '$pass'"); // Проверка введенных данных
    $user = $result->fetch_assoc(); // Создаёт массив
    if(count($user) == 0){
        echo "Такой пользователь не найден";
        exit();
    }
    
    setcookie('user', $user['name'], time() + 3600, "/"); //Авторизация

    header('Location: /Dart/mein.php'); // Переадресация



























?>
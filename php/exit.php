<?php
    setcookie('user', $user['name'], time() - 3600, "/"); //Выход из авторизации
    header('Location: /Dart/index.html'); // Переадресация
?>
<?php
session_start();
file_put_contents("error.txt", 0);
include('db_connect.php');
$login = $_POST['login']; // Получаем логин и пароль из формы с помощью POST запроса
$password = $_POST['password'];

// Получаение столбцов по введённому логину
$query = $db -> query("SELECT * FROM user WHERE username = '{$login}' AND password = '{$password}'"); 

// Если количество столбцов равно 1 (т.е. пользователь есть в БД), то
if (count($query -> fetchAll(PDO::FETCH_ASSOC)) == 1) {
    $_SESSION['user'] = ['username' => $login]; // Старт сессии
    header("Location: authorized_page.php"); // Перенаправление на страницу для авторизованных
} else {
    file_put_contents("error.txt", 1);
    header("Location: index.php");
}
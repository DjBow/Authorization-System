<?php
session_start();
file_put_contents("error.txt", 0);
include('db_connect.php'); 
$login = $_POST['login']; // Получаем логин и пароль из формы с помощью POST запроса
$password = $_POST['password'];


$check = $db -> query("SELECT * FROM user WHERE username = '{$login}'"); 

// Если количество столбцов равно 0 (т.е. пользователь не числится БД), то
if (count($check -> fetchAll(PDO::FETCH_ASSOC)) == 0) {
    $_SESSION['user'] = ['username' => $login];
    $db -> query("INSERT INTO user (username, password) VALUES ('{$login}', '{$password}')");
    header("Location: authorized_page.php"); // Записываем пользователя в БД и перенаправляем на страницу для залогиненных
    echo("<script>console.log('ЗАПИСАЛ ХУЙНЮ');</script>");

} else if ($_POST['login'] == '') {
    file_put_contents("error.txt", 3);
    header("Location: registration_page.php");  

} else {
    file_put_contents("error.txt", 2);
    header("Location: registration_page.php");
}
<?php
session_start();
include('db_connect.php');
$login = $_POST['login'];
$password = $_POST['password'];
// $md5_password = md5($password);

$query = $db -> query("SELECT * FROM user WHERE username = '{$login}' AND password = '{$password}'"); 

if (count($query -> fetchAll(PDO::FETCH_ASSOC)) == 1) {
    $_SESSION['user'] = ['username' => $login];
    header("Location: user.php");
} else { 
    echo("Ошибка: Данный логин или пароль неправильны.");
}
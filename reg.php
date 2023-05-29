<?php
session_start();
include('db_connect.php');
$login = $_POST['login'];
$password = $_POST['password'];
// $md5_password = md5($password);

$check = $db -> query("SELECT * FROM user WHERE username = '{$login}'"); 

// Считаем кол-во элементов в массиве 
if (count($check -> fetchAll(PDO::FETCH_ASSOC)) == 0) {
    $_SESSION['user'] = ['username' => $login];
    $db -> query("INSERT INTO user (username, password) VALUES ('{$login}', '{$password}')");
    header("Location: user.php");
} else {
    echo "Такой логин уже занят!";
}


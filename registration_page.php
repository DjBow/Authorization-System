<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Регистрация</title>
</head>
<body>
    <form class="whole_block" action="reg.php" method="post">

        <label class="title">Регистрация</label>

        <div class="block">
            <label class="label">Логин</label>
            <input class="input_field" type="text" name="login" autofocus placeholder="Придумайте логин">
        </div>

        <div class="block">
            <label class="label">Пароль</label>
            <input class="input_field" type="password" name="password" autofocus placeholder="Придумайте пароль">
        </div>

        <?php // Если после переадресации обратно в файле содержится цифра 1 (т.е. войти не удалось), то выводится ошибка
        $error = htmlentities(file_get_contents("error.txt"));
        if ($error == 2) { echo '<div class="error">Данный логин уже занят другим пользователем.</div>';}
        if ($error == 3) { echo '<div class="error">Поле логина не может быть пустым.</div>';}
        ?>
        <button class="button" type="submit" name="register">Зарегистрироваться</button>
      
        <div class="create_new_account">
            <a href="index.php">Войти в существующий аккаунт</a>
        </div>
      
    </form>
</body>
</html>
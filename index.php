<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Authorization</title>
</head>
<body>
    <form class="whole_block" action="auth.php" method="post">

        <label class="title">Авторизация</label>

        <div class="block">
            <label class="label">Логин</label>
            <input class="input_field" type="text" name="login" autofocus placeholder="Введите логин">
        </div>

        <div class="block">
            <label class="label">Пароль</label>
            <input class="input_field" type="password" name="password" autofocus placeholder="Введите пароль">
        </div>

        <?php // Если после переадресации обратно в файле содержится цифра 1 (т.е. войти не удалось), то выводится ошибка
        $error = htmlentities(file_get_contents("error.txt"));
        if ($error == 1) { echo '<div class="error">Ошибка в логине или пароле.</div>'; }
        ?>
        
        <button class="button" type="submit" name="login_button">Войти</button>

        <div class="create_new_account">
            <a href="registration_page.php">Создать новый аккаунт</a>
        </div>

    </form>
</body>
</html>
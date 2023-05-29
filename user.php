<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <title>You've been rickrolled! xD</title>
    <?php
    session_start();
    ?>
</head>
<body>
    <?php
    if (isset($_SESSION['user'])) {
        echo ("<p>Поздравляем с успешным входом в аккаунт, {$_SESSION['user']['username']} </p>");
    } else {
        echo("Вы не авторизированы.");
    }
    ?>
    
    <video autoplay="autoplay" loop controls> 
        <source src="rick.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
    </video>
</body>
</html>

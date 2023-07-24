<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="authorized_page.css">
    <title>You've been rickrolled! xD</title>

</head>
<body>
    <?php
    if (isset($_SESSION['user'])) {
      echo "<p>Вы успешно вошли в аккаунт, {$_SESSION["user"]["username"]}!</p>
      <video autoplay='autoplay' loop controls> 
          <source src='rick.mp4' type='video/mp4; codecs='avc1.42E01E, mp4a.40.2'' />
      </video>";
      
    }
    else {
      echo("<p>Вы не авторизированы.</p>");
      echo("<a href='registration_page.php'>Создать новый аккаунт</a>");
    }
    ?> 

</body>
</html>

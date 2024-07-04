<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

</head>

<body>
<?php require_once('header.php'); ?>

  <div class="log">
    <form class="login" action="./vendor/signin.php" method="post">
      <h1 class="enter">ВХОД</h1>
      <p class="size14">Введите свою почту и пароль, чтобы войти</p>
      <?php
      if ($_SESSION['message']) {
        echo   $_SESSION['message'];
      }
      unset($_SESSION['message']);
      ?>
      <div class="col">
        <h1 class="size15">Email:</h1>
        <input class="input" type="email" id="login" name="email">
      </div>
      <div class="col">
        <h1 class="size15">Пароль:</h1>
        <input autocomplete="off" class="input" type="password" id="password" name="password">
      </div>
      <button class="btn_enter" type="submit">ВОЙТИ</button><br>
      <div class="under_form">
        <a href="">Я забыл пароль</a>
        <a href="registration.php">Регистрация</a>
      </div>
  </div>
  </form>
  </div>
  <?php require_once('footer.php'); ?>
  <script src="js/header.js"></script>
</body>

</html>
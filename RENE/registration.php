<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

</head>

<body>
  <?php require_once('header.php'); ?>
  <div class="reg">
    <form class="login" action="./vendor/signup.php" method="post">
      <h1 class="enter">РЕГИСТРАЦИЯ</h1>
      <p class="size14">После регистрации на сайте вам будет доступно отслеживение состояния <br> заказов, личный кабинет и другие новые возможности.</p>
      <?php
      if ($_SESSION['message']) {
        echo $_SESSION['message'];
      }
      unset($_SESSION['message']);
      ?>
      <div class="col">
        <h1 class="size15">Email</h1>
        <input  class="input_reg" type="email" required id="login" name="email">
      </div>
      <div class="col">
        <h1 class="size15">Пароль</h1>
        <input autocomplete="off" class="input_reg" type="password" required name="password">
      </div>
      <div class="col">
        <h1 class="size15">Подтверждение пароля</h1>
        <input autocomplete="off" class="input_reg" type="password" required name="password_confirm">
      </div>
      <div class="col">
        <h1 class="size15">Имя</h1>
        <input autocomplete="off" class="input_reg" type="text" required name="name">
      </div>
      <div class="col">
        <h1 class="size15">Фамилия</h1>
        <input autocomplete="off" class="input_reg" type="text" required name="lastname">
      </div>
      <div class="col">
        <h1 class="size15">Телефон</h1>
        <input autocomplete="off" class="input_reg tel" type="text" required name="telephone">
      </div>
      <div class="checked">
        <input autocomplete="off" type="checkbox" value="Yes" name="check">
        <p> Получать новости об акциях и скидках</p>
      </div>
      <button class="btn_enter_reg" type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button><br>
      <div class="under_form">
        <span>Нажимая на кнопку «Зарегестрироваться» <br>вы соглашаетесь на <a class="presonal_data" href="">обработку персональных данных</a></span>
      </div>
  </div>
  </form>
  </div>
  <?php require_once('footer.php'); ?>
  <script src="js/header.js"></script>
  <script src="./js/telmask.js"></script>
</body>

</html>
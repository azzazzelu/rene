<?php
    session_start();
    require_once 'connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $telephone = $_POST['telephone'];
    $check = $_POST['check'];

    if ($password === $password_confirm) {
      $hash = md5($password);
    mysqli_query($connect, "INSERT INTO `users` ( `email`, `password`, `name`, `last_name`, `telephone`) 
       VALUES ( '$email', '$hash', '$name', '$lastname', '$telephone')");
        $_SESSION['message'] = '<p class="good_request">Регистрация прошла успешно</p>';
        header('Location: ../registration.php');

  }else if($password < 6){
    $_SESSION['message'] = '<p class="bad_request">Минимальная длина пароля – 6 символов</p>';
      header('Location: ../registration.php'); 
  }
  else{
      $_SESSION['message'] = '<p class="bad_request">Пароли не совпадают</p>';
      header('Location: ../registration.php'); 
    }
 ?>
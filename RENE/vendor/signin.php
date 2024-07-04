<?php
    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = md5($password);
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$hash'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = $user;
        $_SESSION['message'] = '<p class="good_request">Добро пожаловать '.$_SESSION['user']['name']. '</p>' ;
        if ($_SESSION['user']['password']=="0192023a7bbd73250516f069df18b500" && $_SESSION['user']['email']=="admin@admin") {
            header('Location: ../admin_panel.php');
    }else {
        header('Location: ../login.php');
    }
    }else{
    $_SESSION['message'] = '<p class="bad_request">Неверный логин или пароль</p>' ;
    header('Location: ../login.php');
  }
  ?>
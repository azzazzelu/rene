<?php
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    
    $counter = 0;
    foreach($_POST as $key => $value) {

        if (strpos($key, "quantity_input_") !== false){
            $_SESSION['cart'][$counter]['quantity'] = $value;
            $counter++;
        } 
    }

    $str = "";
    $count = 0;
    foreach($_SESSION['cart'] as $item){
        if($count == 0){
            $str = $str . $item['id'] . "," . $item['quantity'];   
        }
        else {
            $str = $str . ";" . $item['id'] . "," . $item['quantity'];
        }
        $count++;
    }

    $id_user = $_SESSION['user']['id'];
    $date_now = date("Y-m-d H:i:s");
    $status = "Ожидает подтверждения";
    mysqli_query($connect, "INSERT INTO `orders` (`id`, `id_user`, `name`, `email`, `phone`, `date`, `status`, `products_info`, `product_name`,`final_price`)
    VALUES (NULL, '$id_user', '$name', '$email', '$phone', '$date_now', '$status', '$str','$title','$price')");

    unset($_SESSION['cart']);

    header('Location: ../myorders.php')
?>
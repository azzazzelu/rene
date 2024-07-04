<?php
session_start();
 require_once 'connect.php';
 $confirm = "Заказ подтвержден";
 $cancel="Заказ отменен";
//  кнопки для админа
 if ($_SESSION['user']['password']=="0192023a7bbd73250516f069df18b500" && $_SESSION['user']['email']=="admin@admin") {
 if (isset($_GET['status_id'])) {
   $order=mysqli_query($connect, "UPDATE orders SET  status='$confirm' WHERE id={$_GET['status_id']}");
}if (isset($_GET['cancel_id'])) {
   $order=mysqli_query($connect, "UPDATE orders SET  status='$cancel' WHERE id={$_GET['cancel_id']}");
 }
 header('Location: ../allorders.php');
//  кнопка отменить для пользователя 
}else{
   if (isset($_GET['cancel_id'])) {
      $order=mysqli_query($connect, "UPDATE orders SET  status='$cancel' WHERE id={$_GET['cancel_id']}");
}
header('Location: ../myorders.php');
}

 
?>
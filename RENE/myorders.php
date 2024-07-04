<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/header.css">
    <title>Мои заказы</title>
    
</head>
<body >
<?php
  include ('header.php');
?>

    <div style="padding-top:150px; margin-left: 5rem; margin-bottom: 3rem;" class=" text-start" >
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Мои заказы</p>
          </div>
        </div>
    </div>
    
    <table style="height:300px; margin-left: 5rem;" class="table ">
        <thead>
            <tr>
                
                <th scope="col">Номер заказа</th>
                <th scope="col">Дата заказа</th>

                <!-- <th scope="col">Количество позиций</th> -->
                <th scope="col">Почта</th> 
                <th scope="col">Статус заказа</th>
                <th scope="col">Цена заказа</th>
                <th scope="col">Имя заказчика</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>

        <?php
            include ('./vendor/item_order.php');
        ?>

        </tbody>
    </table>


    <?php
      include ('footer.php');
    ?>
  <script src="js/header.js"></script>
<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>
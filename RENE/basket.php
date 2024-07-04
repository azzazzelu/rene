

<?php session_start();?>
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
    <title>Корзина</title>
</head>
<body >
<?php
  include ('header.php');
?>
    
    <div class=" text-start" style="padding-top:150px; margin-left: 5rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Корзина</p>
          </div>
        </div>
    <form action="vendor/create_order.php" method="post">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Товар</th>
                    <th scope="col">Название товара</th>
                    <!-- <th scope="col">Количество</th> -->
                    <th scope="col">Цена</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    include('./vendor/item_basket.php');
                ?>

            </tbody>
        </table>
        <?php
        if ($price ==0) {
         echo "<h1 style=\"margin-top:150px; margin-bottom:150px; text-align:center;\">Корзина пуста</h1>";
        }else{
        ?>
        <div class="container">
            <div class="col">
            <div class="" style="margin-left:960px" >
            <h1 >Итоговая цена: <?php echo $cost?> руб</h1>
            </div>
                <p class="text-start" style="font-size: 20px;"><b>Ваше имя:</b><input type="text" class="form-control" id="name" name="name" placeholder="Имя" value="" required=""></p>
                <p class="text-start" style="font-size: 20px;"><b>Почта:</b> <input type="email" class="form-control" id="email" name="email" placeholder="Почта" value="" required=""></p>
                <p class="text-start" style="font-size: 20px;"><b>Телефон:</b> <input type="text" class="form-control tel" id="phone" name="phone" placeholder="Телефон" value="" required=""></p>
                <p name="price" class="text-start" style="font-size: 20px;"><b>Конечная цена: </b><input type = "text" name = "price" value ="<?php echo $cost?>" hidden /><?php echo $cost?> руб</p>
                    <div class="container text-end">
                        <button class="btn btn-success" href="ready_order.php">Оформить заказ</button>
                    </div>
            </div>
        </div>
    </form>
        <?php }?>
    <?php
      include ('footer.php');
    ?>
  <script src="./js/telmask.js"></script>
<script src="/bootstrap/js/bootstrap.js" ></script> 
<script src="js/header.js"></script>
</body>
</html>

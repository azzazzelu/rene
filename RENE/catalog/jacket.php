<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jacket</title>
    <link rel="stylesheet" href="../css/CATALOG.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <?php require_once('../header.php'); ?>
    <div class="platya">
        <div class="platye_title">
            <h1 class="title">
                Жакеты
            </h1>
        </div>
        <div class="container">

            <?php
            require_once '../vendor/connect.php';

            $searchWord = "jackets";

            // Создаем SQL запрос с условием LIKE
            $sql = "SELECT * FROM `products` WHERE `alt` LIKE '%$searchWord%'";

            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $show_img = base64_encode($row['image']);
                    $title = $row['title'];
                    $price = $row['price'];

            ?>

                    <div class="block">
                        <img width="400px" height="600px" src="data:image/jpeg;base64,<?php echo $show_img ?>" alt="">
                        <h1 class="composition"><?= $title ?></h1>
                        <h1 class="for_price">Цена: <?= $price ?>&#8381;</h1>
                        <a href="../vendor/guide_basket.php?id=<?php echo $row['id'] ?>" class="button">
                        добавить в корзину
                        </a>
                    </div>

            <?php
                }
            }
            ?>
        </div>
    </div>
    <?php require_once('../footer.php'); ?>
    <script src="../js/header.js"></script>
</body>

</html>
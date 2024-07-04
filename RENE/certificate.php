
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сертификаты</title>
    <link rel="stylesheet" href="./css/certificate.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <?php
    require_once 'header.php';
    ?>
        <div class="gift" id="gift">
            <div class="container">
                <div class="gift_text">
                    <h1 class="gift_text">сертификаты</h1>
                </div>
                <div class="gift_catalog">
                    <div class="block block_hover">
                        <div class="wrap_gift">
                            <h1 class="top_text">ZeroOne</h1>
                            <h1 class="under_top_text">Подарочные сертификаты</h1>
                            <h1 class="bottom"> 20 000Р
                                <hr class="hr">
                            </h1>
                            <button class="button">
                                <h1 class="button_text">добавить в корзину</h1>
                            </button>
                        </div>
                        <h1 class="composition">СЕРТИФИКАТ</h1>
                        <h1 class="for_price">20 000</h1>
                    </div>
                    <div class="block block_hover">
                        <div class="wrap_gift">
                            <h1 class="top_text">ZeroOne</h1>
                            <h1 class="under_top_text">Подарочные сертификаты</h1>
                            <h1 class="bottom"> 15 000Р
                                <hr class="hr">
                            </h1>
                            <button class="button">
                                <h1 class="button_text">добавить в корзину</h1>
                            </button>
                        </div>
                        <h1 class="composition">СЕРТИФИКАТ</h1>
                        <h1 class="for_price">15 000</h1>
                    </div>
                    <div class="block block_hover">
                        <div class="wrap_gift">
                            <h1 class="top_text">ZeroOne</h1>
                            <h1 class="under_top_text">Подарочные сертификаты</h1>
                            <h1 class="bottom"> 10 000Р
                                <hr class="hr">
                            </h1>
                            <button class="button">
                                <h1 class="button_text">добавить в корзину</h1>
                            </button>
                        </div>
                        <h1 class="composition">СЕРТИФИКАТ</h1>
                        <h1 class="for_price">10 000</h1>
                    </div>
                    <div class="block block_hover">
                        <div class="wrap_gift">
                            <h1 class="top_text">ZeroOne</h1>
                            <h1 class="under_top_text">Подарочные сертификаты</h1>
                            <h1 class="bottom"> 5 000Р
                                <hr class="hr">
                            </h1>
                            <button class="button">
                                <h1 class="button_text">добавить в корзину</h1>
                            </button>
                        </div>
                        <h1 class="composition">СЕРТИФИКАТ</h1>
                        <h1 class="for_price">5 000</h1>
                    </div>
                </div>

            </div>
        </div>
    <?php require_once('footer.php'); ?>
    <script src="js/header.js"></script>
</body>

</html>
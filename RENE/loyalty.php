
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/Loyalty.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">

    <title>loyalty</title>
</head>

<body>
    <?php require_once('header.php'); ?>
    <div class="container" >
        <div class="hed_loayl">
            <h1 class="hed_text">
                СИСТЕМА ЛОЯЛЬНОСТИ
            </h1>
            <h1 class="under_text">Карта RENE выдается при совершении единовременной покупки на сумму 5 000
                РУБ.
                и более...</h1>
        </div>
        <div class="body_loyal">
            <div class="sis">
                <div class="for_price">
                    <h1>День рождение</h1>
                    <p>Индивидуальная скидка в честь праздника</p>
                    <p style="font-size: 40px; margin: 0; padding: 0;">20%</p>
                    <p>Скидка на последующую покупку</p>
                </div>
            </div>
            <div class="sis">
                <div class="for_price">
                    <h1>Базовый уровень</h1>
                    <p>При совершении покупок от 100 000 руб.</p>
                    <p style="font-size: 40px; margin: 0; padding: 0;">7%</p>
                    <p>Скидка на последующие покупки</p>
                </div>
            </div>
            <div class="sis">
                <div class="for_price">
                    <h1>Высший уровень</h1>
                    <p>При совершении покупок от 200 000 руб.</p>
                    <p style="font-size: 40px; margin: 0; padding: 0;">10%</p>
                    <p>Скидка на последующие покупки</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 110px; margin-bottom: 210px;">
        <h1>Популярные вопросы</h1>
        <details class="details">
            <summary class="details__title">Суммируется ли скидка по системе лояльности с текущими акциями?</summary>
            <ul class="details__content">
                <li>
                    Скидка по картам не суммируется с товарами категории SALE и не действует на уцененные товары
                </li>
            </ul>
        </details>
        <details class="details">
            <summary class="details__title">Что делать, если при совершении покупки нет карты с собой?</summary>
            <ul class="details__content">
                <li>
                    Если клиент не взял карту, но может сообщить код поступивший по СМС (двухэтапная аутентификация) –
                    запрос делает сотрудник магазина, используя данный код делаем скидку по данной карте и накопления.
                    Воспользоваться скидкой по карте может только владелец карты.
                </li>
            </ul>
        </details>
        <details class="details">
            <summary class="details__title">Есть ли скидки в день рождение?</summary>
            <ul class="details__content">
                <li>
                    В День Рождения клиента в течении 7 дней – 3 дня до дня рождения и 3 дня после, клиент получает в
                    подарок +10% к своей карте лояльности, но не более 20%, так как максимальная скидка по системе
                    лояльности 20%, другие скидки и акции не суммируются. Скидка предоставляется только по предъявлению
                    паспорта владельца карты лояльности.
                </li>
            </ul>
        </details>
    </div>
    <?php require_once('footer.php'); ?>
    <script src="js/header.js"></script>
</body>

</html>
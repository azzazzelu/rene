
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/Delivery.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Delivery</title>
</head>

<body>
    <?php require_once('header.php'); ?>
    <div class="conteiner">
        <h1>Доставка</h1>
        <h2>Виды доставок</h2>
        <details class="details">
            <summary class="details__title">Доставка по Москве в пределах МКАД</summary>
            <ul class="details__content">
                <li>
                    По количеству товаров в заказе действует ограничение не более 6 позиций для заказов с оплатой при
                    получении.
                </li>
                <li>
                    Доставка при выкупе от 5.000руб. - бесплатная, менее 5.000руб. - 300руб.
                </li>
                <li>Сроки доставки 1-3 дня (при наличии изделий в Москве)</li>
                <li>Интервал доставки Пн-Сб с 10:00 до 19:00</li>
                <li>Доставка курьером с примеркой (15 минут)</li>
                <li>Если изделие не подошло, можно вернуть курьеру</li>
            </ul>
        </details>
        <details class="details">
            <summary class="details__title">Доставка за пределами МКАД и МО</summary>
            <ul class="details__content">
                <li>
                    Осуществляется по 100% предоплате заказа на сайте.
                </li>
                <li>
                    Сроки доставки 1-3 дня (при наличии изделий в Москве)
                </li>
                <li>Доставка курьером с примеркой (15 минут)</li>
                <li>Если изделие не подошло, можно вернуть курьеру. Возврат денежных средств на карту до 10 рабочих
                    дней.</li>
                <li>Магазин оставляет за собой право разделить заказ, при условии, что вещь находится в региональном
                    магазине.</li>
            </ul>
        </details>
        <details class="details">
            <summary class="details__title">Доставка по России</summary>
            <ul class="details__content">
                <li>
                    Доставка в регионы России рассчитывается на сайте автоматически
                </li>
                <li>
                    Осуществляется по 100% предоплате заказа на сайте.
                </li>
                <li>
                    Доставка в Центральный регион — до 300 руб.
                </li>
                <li>
                    Срок доставки указывается на сайте при оформлении заказа
                </li>
                <li>
                    Если изделие не подошло, можно вернуть курьеру. Возврат денежных средств на карту до 10 рабочих дней.
                </li>
            </ul>
        </details>
        <details class="details">
            <summary class="details__title">Самовывоз</summary>
            <ul class="details__content">
                <li>
                    Самовывоз из магазинов RENE – бесплатно
                </li>
                <li>
                    По количеству товаров в заказе действует ограничение не более 6 позиций для заказов с оплатой при
                    получении. Оформление следующего заказа после примерки действующего.
                </li>
                <li>
                    Резерв, после комплектации заказа 1-2 дня.
                </li>
                <li>
                    Оплата наличными/картой после примерки.
                </li>
                <li>
                    Дополнительная скидка 2% при оплате на сайте, за исключением товара из категории "SALE". Действует
                    при фактической оплате заказа на сайте.
                </li>
            </ul>
        </details>
    </div>
    <?php require_once('footer.php'); ?>
    <script src="js/header.js"></script>
</body>

</html>
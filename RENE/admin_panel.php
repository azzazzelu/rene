<?php
 include ('header.php');
session_start();
include_once 'vendor\connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_panel.css">
    <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/header.css">
  
    <title>admin_panel</title>
</head>

<body>
    <div class="container">
        <?php
        if (!$_SESSION['user']['password']=="0192023a7bbd73250516f069df18b500" && !$_SESSION['user']['email']=="admin@admin") {
            echo "Вы попали сюда случайно";
        } else {
            echo "<h2>Добро пожаловать</h2> ";
            echo "<div class=\"container_one\">
            <form action=\"admin_panel.php\" method=\"post\" enctype=\"multipart/form-data\" class=\"form\">
          <label >Добавить товар</label>
          <div class=\"block\">
          <h1>Выберите файл</h1>
          <input name=\"file\" type=\"file\">
            </div>
            <div class=\"block\">
          <h1>О товаре</h1>
          <input class=\"input\" autocomplete=\"off\" name=\"about\" type=\"text\">
          </div>
          <div class=\"block\">
          <h1>Цена товара</h1>
          <input class=\"input\" autocomplete=\"off\" name=\"price\" type=\"text\">
          </div>
          <div class=\"block\">
          <h1>Категория одежды</h1>
          <p style=\"color:red;\">ОБЯЗАТЕЛЬНОЕ ПОЛЕ</p>
          <select name=\"category\" id=\"\"> 
          <option value=\"\">Выбрать</option>
          <option value=\"dresses\">Платье</option>
          <option value=\"skirts\">Юбка</option>
          <option value=\"jackets\">Жакет</option>
          <option value=\"trousers\">Брюки</option>
          <option value=\"kits\">Комплекты</option>
          </select>
          </div>
          <button class=\"button\" name=\"upload\" type=\"submit\">Добавить</button>
          </form></div>";
        }

        ?>
        <?php
        if (isset($_POST['upload'])) {
            if (!empty($_FILES['file']['tmp_name'])) $img = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            $about = $_POST['about'];
            $price = $_POST['price'];
            $category = $_POST['category'];
            if ($category == '') {
                echo '<h3>Вы не выбрали значение</h3>';
            } else {
                $add_product = mysqli_query($connect, "INSERT INTO `products`(`image`,`title`,`price`,`alt`)VALUES('$img','$about','$price','$category')");
                if (!$add_product) {
                    echo '<h3>Данные введены не корректно</h3>';
                } else {
                    echo '<h3>Товар успешно добавлен</h3>';
                }
            }
        }
        ?><?php
        if (isset($_POST['edit'])) {
            $cat = $_POST['category'];
            
            $image = $_FILES['image']['tmp_name'];
            $imageType = $_FILES['image']['type'];
            $imgData = file_get_contents($image);
            $imgData = mysqli_real_escape_string($connect, $imgData);


            if ($cat == '') {
                echo '<h3>Вы не выбрали значение</h3>';
            } else {
                //Если это запрос на обновление, то обновляем
                if (isset($_GET['red_id'])) {
                    if (!empty($imgData)) {
                        $sql = mysqli_query($connect, "UPDATE products SET  image='$imgData', title = '{$_POST['Title']}',price = '{$_POST['Price']}',alt = '$cat' WHERE id={$_GET['red_id']}");
                    }else{
                        $sql = mysqli_query($connect, "UPDATE products SET   title = '{$_POST['Title']}',price = '{$_POST['Price']}',alt = '$cat' WHERE id={$_GET['red_id']}");
                    }
                } else {
                    //Иначе вставляем данные, подставляя их в запрос
                    $sql = mysqli_query($connect, "INSERT INTO products (image,title, price,alt) VALUES ('$imgData','{$_POST['Title']}', '{$_POST['Price']}', '{$_POST['Alt']}')");
                }

                //Если вставка прошла успешно
                if ($sql) {
                    echo '<h3>Успешно изменено !</h3>';
                } else {
                    echo '<h3>Произошла ошибка: ' . mysqli_error($connect) . '</h3>';
                }
            }
        }

            if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
                //удаляем строку из таблицы
                $sql = mysqli_query($connect, "DELETE FROM `products` WHERE `id` = {$_GET['del_id']}");
                if ($sql) {
                    echo "<h3>Товар удален</h3>";
                } else {
                    echo '<h3>Произошла ошибка: ' . mysqli_error($connect) . '</h3>';
                }
            }
            if (isset($_GET['red_id'])) {
                $sql = mysqli_query($connect, "SELECT `id`, `image`, `title` , `price`,`alt` FROM `products` WHERE `id`={$_GET['red_id']}");
                $product = mysqli_fetch_array($sql);
                $show_img = base64_encode($product['image']);
            }
            ?>
    <?php
     if (!$_SESSION['user']['password']=="0192023a7bbd73250516f069df18b500" && !$_SESSION['user']['email']=="admin@admin") {
        
    } else {

   ?>
        <div class="container_one">
            <form action="" method="post" class="form" enctype="multipart/form-data">
                <label>Редактирование</label>
                <table>
                    <tr>
                        <div class="block">
                            <h1>Изоброжение:</h1>
                            <input name="image" type="file" value="">

                        </div>
                    </tr>
                    <tr>
                        <div class="block">
                            <h1>Наименование:</h1>
                            <input class="input" type="text" name="Title" value="<?= isset($_GET['red_id']) ? $product['title'] : ''; ?>">
                        </div>
                    </tr>
                    <tr>
                        <div class="block">
                            <h1>Цена:</h1>
                            <input class="input" type="text" name="Price" value="<?= isset($_GET['red_id']) ? $product['price'] : ''; ?>"> руб.
                        </div>
                    </tr>
                    <tr>
                        <div class="block">
                            <h1>Категория одежды:</h1>
                            <p style="color:red;">ОБЯЗАТЕЛЬНОЕ ПОЛЕ</p>
                            <select name="category" id="">
                                <option value="">Выбрать</option>
                                <option value="<?= isset($_GET['red_id']) ? $product['alt'] = 'dresses' : ''; ?>">Платье</option>
                                <option value="<?= isset($_GET['red_id']) ? $product['alt'] = 'skirts' : ''; ?>">Юбка</option>
                                <option value="<?= isset($_GET['red_id']) ? $product['alt'] = 'jackets' : ''; ?>">Жакет</option>
                                <option value="<?= isset($_GET['red_id']) ? $product['alt'] = 'trousers' : ''; ?>">Брюки</option>
                                <option value="<?= isset($_GET['red_id']) ? $product['alt'] = 'kits' : ''; ?>">Комплекты</option>
                            </select>
                        </div>
                    </tr>
                    <tr>
                        <input type="submit" name="edit" value="Подтвердить" class="button">
                    </tr>
                </table>
            </form>
        </div>

        <div class="container_one">
            <table>
                <tr class="">
                    <td>Изоброжение</td>
                    <td>Наименование</td>
                    <td>Цена</td>
                    <td>категория</td>
                    <td>Удаление</td>
                    <td>Редактирование</td>
                </tr>
          
                <?php

                $sql = mysqli_query($connect, 'SELECT `id`,`image`, `title`, `price` , `alt` FROM `products`');
                while ($result = mysqli_fetch_array($sql)) {
                    $show_img = base64_encode($result['image']);
                    echo "<tr>
                    <td><img width=\"200px\" height=\"300px\" src=\"data:image/jpeg;base64,$show_img\"></td>
                    <td>{$result['title']}</td>
                    <td>{$result['price']} ₽</td>
                    <td>{$result['alt']}</td>
                    <td><a class=\"button_min\" href='?del_id={$result['id']}'>Удалить</a></td>
                    <td><a class=\"button_min\" href='?red_id={$result['id']}'>Изменить</a></td>
                    </tr>";
                }
                ?>
                
                <tr>
            </table>
        </div>
        <div class="exit">
            <a href="logout.php">Выход</a>
        </div>
    </div>
    <?php }
     include ('footer.php');
            ?>
             <script src="js/header.js"></script>
<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>

</html>
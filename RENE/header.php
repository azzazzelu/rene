<?php session_start();?>
<header>
    <div class="h_container">
        <div class="h_menu_l">
            <div class="h_item catalog">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
                <p>Каталог</p>
            </div>
            <div class="h_item h_hover">
                <a href="#">Покупателям</a>
            </div>

        </div>
        <div class="h_menu_logo">
            <a href="index" class="h_logo">
                RENE
            </a>
        </div>
        <div class="h_menu_r">
        <?php
          if(!isset($_SESSION['user'])){
            echo "<div class=\"h_item\">
                    <a href=\"\login\" >Вход</a>
                  </div>
                 
                  <div class=\"h_item\">
                  <a href=\"\\vendor/guide_basket.php\" class=\"\">Корзина</a>
                  </div>
                  <a href=\"\\vendor/guide_basket.php\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                  <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\" />
              </svg>
            </a>";
          }else{
            if($_SESSION['user']['password'] == "0192023a7bbd73250516f069df18b500"&& $_SESSION['user']['email']=="admin@admin"){
                echo " <div class=\"h_item\">
                <a href=\"\logout.php\" class=\"\">Выйти</a>
              </div>
              <div class=\"h_item\">
              <a href=\"\allorders.php\" class=\"\">Заказы</a>
              </div>
              <div class=\"h_item\">
              <a href=\"\admin_panel.php\" class=\"\">Админ Панель</a>
              </div>
              <div class=\"h_item\">
              <a href=\"\\vendor/guide_basket.php\" class=\"\">Корзина</a>
              </div>
              <a href=\"\\vendor/guide_basket.php\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                  <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\" />
              </svg>
            </a>";
              }else {
                echo "<div class=\"h_item\">
                <a href=\"\logout.php\" class=\"\">Выйти</a>
              </div>
              <div class=\"h_item\">
              <a href=\"\myorders.php\" class=\"\">Мои заказы</a>
              </div>
              <div class=\"h_item\">
              <a href=\"\\vendor/guide_basket.php\" class=\"\">Корзина</a>
              </div>
              <a href=\"\\vendor/guide_basket.php\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                  <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\" />
              </svg>
            </a>";
                
              }
            }
        ?>
               
            </div>
        </div>
    </div>
    <div class="h_client">
        <div class="columm">
            <div class="h_item">
                <a href="\delivery">
                    Доставка
                </a>
            </div>
            <div class="h_item">
                <a href="\refund">
                    Гарантия и возврат
                </a>
            </div>
            <div class="h_item">
                <a href="\about">
                    О компании
                </a>
            </div>
            <div class="h_item">
                <a href="\loyalty">
                    Система лояльности
                </a>
            </div>
        </div>
        <div class="columm">
            <div class="h_item">
                <a href="#">
                    VKONTAKTE
                </a>
            </div>
            <div class="h_item">
                <a href="#">
                    TELEGRAM
                </a>
            </div>
            <div class="h_item">
                <a href="#">
                    WHATSAPP
                </a>
            </div>
            <div class="h_item">
                +7 777 777 77 77
            </div>
        </div>
        <div class="columm">

        </div>
    </div>
    <div class="h_catalog" style="display: none;">
        <div class="h_item">
            <a class="h_link" href="#">
                Новинки
            </a>
        </div>
     
        <div class="h_item">
            <a class="h_link" href="../catalog/dresses">
                Платья
            </a>
        </div>
        <div class="h_item">
            <a class="h_link" href="../catalog/skirts">
                Юбки
            </a>
        </div>
        <div class="h_item">
            <a class="h_link" href="../catalog/jacket">
                Жакеты
            </a>
        </div>
        <div class="h_item">
            <a class="h_link" href="../catalog/trousers">
                Брюки
            </a>
        </div>
        <div class="h_item">
            <a class="h_link" href="../catalog/kits">
                Комплекты
            </a>
        </div>
    </div>
    <div class="h_overlay"></div>
</header>
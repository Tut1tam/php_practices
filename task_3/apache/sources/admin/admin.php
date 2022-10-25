<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Main LIBRARY</title>
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <link href="default.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="fonts.css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><span class="fa fa-bolt"></span><a href="#">городская библиотека</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li></li><a href="main.html">Главная</a></li>
                    <li class="current_page_item"><a href="catalog.php">Каталог</a></li>
                    <li><a href="about.html">О нас</a></li>
                    <li><a href="libraries.php">Контакты</a></li>
                    <li><a href="/admin/admin.php">Панель Администратора</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="header-featured">
        <div id="banner-wrapper">
        <?php
            echo "<div>
                Тут находиться панель администратора
            </div>
            ";            
        ?>
        </div>
    </div>
    </body>
</html>
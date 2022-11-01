<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Main library</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../main.html">Городская библиотека</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../main.html">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../catalog.php">Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../aboutus.html">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../libraries.php">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/admin.php"><strong>Панель Администратора</strong></a>
                </li>
                </ul>
            </div>
            </nav>
    <div>
        <div id="banner-wrapper" style='display:flex; align-items:center;justify-content:center;'>
        <?php
            echo "<span class='badge text-bg-primary' style='weight: 50px; height: 50px;display:flex; align-items:center;justify-content:center;'>Тут находиться панель администратора</span>";         
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
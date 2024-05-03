<!DOCTYPE html>
<html>
    <head>
        <?php
            if (!isset($_COOKIE['user'])){
                exit(header("Location: /"));
            }
        ?>
        <meta charset="utf-8">
        <link href="style_lk.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Личный кабинет</title>
    </head>
    <body>
            <div class="card_text"><h1 id='title_card'>Пропуск: <?php echo $_COOKIE['user']?></h1></div>

            <input id="toggle" type="checkbox"></input>
            <label for="toggle" class="hamburger">
                <div class="top-bun"></div>
                <div class="meat"></div>
                <div class="bottom-bun"></div>
            </label>


        <div class="nav">
            <div class="nav-wrapper">
                <nav>
                    <a href="https://www.gubkin.ru/">Наш вуз</a></br>
                    <a href="https://ilyaserver.ru/form1">Анкета №1</a></br>
                    <a href="#">Анкета №2</a></br>
                    <a href="https://ilyaserver.ru/validations/exit.php">Выход</a></br>
                </nav>  
            </div>
        </div>
    </body>
</html>
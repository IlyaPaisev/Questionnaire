<html lang="ru">
<head>
    <?php
            if (!isset($_COOKIE['user'])){
                exit(header("Location: /"));
            }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_form1.css" rel='stylesheet' type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Анкета №1</title>
</head>
<body>
    <div class="container">
        <div class="main_title"><h1>Опрос Первокурсника</h1></div>
        <div id='student_form'>
            <form  action="form1_loader.php" method="post">
                <h2>Изучали ли вы в школе информатику?</h2>
                <h3><input class="radio_click" type="radio" name="answer1" value='Да, полный курс.' required>Да, полный курс.</h3>
                <h3><input class="radio_click" type="radio" name="answer1" value='Да, но только в старших классах.'>Да, но только в старших классах.</h3>
                <h3><input class="radio_click" type="radio" name="answer1" value='Да, но только в средних классах.'>Да, но только в средних классах.</h3>
                <h3><input class="radio_click" type="radio" name="answer1" value='Нет, не изучал.'>Нет, не изучал.</h3>

                <h2>Какой язык программирования вы изучали и использовали как основной до поступления?</h2>
                <h3><input class="radio_click" type="radio" name="answer2" value='Python' required>Python</h3>
                <h3><input class="radio_click" type="radio" name="answer2" value='Java'>Java</h3>
                <h3><input class="radio_click" type="radio" name="answer2" value='C++'>C++</h3>
                <h3><input class="radio_click" type="radio" name="answer2" value='C#'>C#</h3>
                <h3><input class="radio_click" type="radio" name="answer2" value='Pascal'>Pascal</h3>
                <h3><input class="radio_click" type="radio" name="answer2" value='Нет правильного'>Нет правильного</h3>

                <h2>Есть ли у вас опыт работы с компьютерными программами или проектами? Если да, то опишите его подробнее.</h2>
                <textarea class="ans" name="answer3" placeholder="Можете поделиться чем угодно..."></textarea>

                <h2>Какие инструменты разработки ПО вы предпочитаете использовать?</h2>
                <textarea class="ans" name="answer4" placeholder="Можете поделиться чем угодно..." required></textarea>

                <h2>Как вы оцениваете свой уровень знаний в области программирования на данный момент?</h2>
                <h3>
                    <input name="answer5" type="range" min="1" max="10" list="markers" required/>
                    <datalist id="markers">
                        <option value="2" label="2"></option>
                        <option value="4" label="4"></option>
                        <option value="6"label="6"></option>
                        <option value="8" label="8"></option>
                        <option value="10" label="10"></option>
                      </datalist>
                </h3>

                <h2>Какие аспекты программирования вас больше всего интересуют (например, веб-разработка, мобильное программирование, искусственный интеллект и т. д.)?</h2>
                <textarea class="ans" name="answer6" placeholder="Можете поделиться чем угодно..." required></textarea>

                <h2>Укажите о своём опыте участия в олимпиадах, если такового не имеется, напишите отсутствует:</h2>
                <textarea class="ans" name="answer7" placeholder="Можете поделиться чем угодно..."></textarea>

                <h2>Какие книги или онлайн-курсы по программированию вы читаете или изучаете?</h2>
                <textarea class="ans" name="answer8" placeholder="Можете поделиться чем угодно..." required></textarea>

                <button>Отправить</button>
            </form>
         </div>
    </div>    
</body>
</html>
# Questionnaire

Result: https://ilyaserver.ru

1.1. Создание формы регистрации новых пользователей и их входа
С помощью HTML мы создаём <form> </form>, в которой будем хранить с помощью тегов <input /> поля информации (пропуск студента, его группу, придуманный им пароль). 
Во второй форме действия будут идентичны, за исключением того, что при входе мы уберём поле группы.
Далее с помощью PHP мы установим связь формы регистрации и скрипта reg.php, который лежит в validations.  <form action="validations/reg.php" method="POST">. Осуществим связь и со скриптом auth.php для входа в личный кабинет студента. (<form action="validations/auth.php" method="POST">)
Непосредственно в скриптах reg.php и auth.php Мы осуществим передачу из html по именам тега <input name=’’> в php.
 

1.2. Стилизация окна регистрация / вход
С помощью каскадной таблицы стилей CSS мы стилизуем наш index.html – главную страницу, которую пользователи будут видеть сразу как попадут на сайт.


1.3. MySQL и удобное временное хранение информации cookies
Для того чтобы данные о зарегистрированных пользователях хранились, а новые добавлялись. Нам нужно что-то, что сможет их собирать и в удобное время  отдавать. Этим удобным способом будет MySQL. Поэтому в каждом скрипте PHP мы должны подключаться к нашей базе данных и передавать все данные и запрашивать их через неё.


1.4. Личный кабинет
После того как пользователь зайдет необходимо сделать так, чтобы его не перекидывало сразу на анкету, ведь это просто отрезает пути для дальнейшего расширения и доработки проекта. Необходимо создать промежуточную страницу, которая предоставит меню для выбора анкеты и с помощью  Cookie проверит может ли право пользователь находиться на странице.
 

1.5. Вступительная анкета для первокурсников
Создание анкеты очень схоже с созданием поля формы, как для страницы регистрации, стилизации этой страницы и подключения MySQL для отправки данных и проверки существует ли Cookie.

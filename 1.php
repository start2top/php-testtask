
<!-- 1.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test task</title>
</head>
<body>
    <!-- Получаем три переменные через GET: a,b,c -->
    <form method="GET">
        <label for="#a">Введите значение переменной a</label>
        <input type="num" name="a"><br><br>

        <label for="#b">Введите значение переменной b</label>
        <input type="num" name="b"><br><br>

        <label for="#c">Введите значение переменной c</label>
        <input type="num" name="c"><br><br>
        <input type="submit">
    </form>
    <!-- Внешняя передача на url 2.php -->
    <?php $url = 'https://test-task000.000webhostapp.com/2.php' . '?' . http_build_query($_GET);?>     
    <a href="<?php echo $url; ?>">2.php</a>
    <!-- вывод ответа сервера на метод запроса -->
   <?php  
        echo '<br>'; 
        echo '<br>';
        echo 'Ответ :';
        include_once '2.php';

   ?>



</body>
</html>

<!-- Есть 2 файла:
1.php
2.php

Алгоритм файла 1.php:
+ Получаем три переменные через GET: a,b,c 
- Передаем переменные a,b через GET и c через POST на url второго файла (внешняя отправка).
+- Выводим ответ сервера на экран.

Алгоритм файла 2.php
- Получаем a,b через GET, c через POST.
+Если какой-то из переменных нет - отдаем ответ "нет переменной" и указываем какой именно. Если нет нескольких переменных - выдаем в одной строке переменных, которых нет (если нет трех переменных, то делаем перечисление через запятую и союз "и"). Пример:
+"Нет переменной a".
+"Нет переменных a и b",
+"Нет переменных a, b и c".
+ Если все переменные есть, то выполняем математическое выражение:
a+b*c и отдаем результат -->

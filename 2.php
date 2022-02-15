<?php

    // Преобразовываем переменные из массива в строки
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];


    // Проверка на наличие информации в переменных
    if (!empty($a)  && !empty($b)  && !empty($c) ) {
        // Преобразование строк в int
        $a = +$a;
        $b = +$b;
        $c = +$c;
        //Выполнение математического уровнения
        echo "$a + $b * $c =  ";
        echo $a + $b * $c;
        // Проверка на наличие значений во всех переменных сразу и вывод ответа если их нет
    }   else if (empty($a) && empty($b) && empty($c)) {
            echo "Нет переменных a, b и c";
    }   // Проверка на наличие значений в 2 переменных и вывод ответа если их нет
         else if (empty($a) && empty($b) || empty($a) && empty($c) || empty($b) && empty($c)) {
            if (empty($a) && empty($b)) {
                echo "Нет переменных a и b";}
            else if (empty($a) && empty($c)) {
                echo "Нет переменных a и c";}
            else if (empty($b) && empty($c)) {
                echo "Нет переменных b и c";}
    }   //   // Проверка на наличие значений в 1 переменной и вывод ответа если их нет
    else if (empty($a) || empty($b) || empty($c)) {
            if (empty($a)) {
                echo "Нет переменной a";
            } else if (empty($b)) {
                echo "Нет переменной b";
            } else if (empty($c)) {
                echo "Нет переменной c";
            } 
    } 

    function output() {
         // Проверка на наличие информации в переменных
    if (!empty($a)  && !empty($b)  && !empty($c) ) {
        // Преобразование строк в int
        $a = +$a;
        $b = +$b;
        $c = +$c;
        //Выполнение математического уровнения
        echo "$a + $b * $c =  ";
        echo $a + $b * $c;
        // Проверка на наличие значений во всех переменных сразу и вывод ответа если их нет
    }   else if (empty($a) && empty($b) && empty($c)) {
            echo "Нет переменных a, b и c";
    }   // Проверка на наличие значений в 2 переменных и вывод ответа если их нет
         else if (empty($a) && empty($b) || empty($a) && empty($c) || empty($b) && empty($c)) {
            if (empty($a) && empty($b)) {
                echo "Нет переменных a и b";}
            else if (empty($a) && empty($c)) {
                echo "Нет переменных a и c";}
            else if (empty($b) && empty($c)) {
                echo "Нет переменных b и c";}
    }   //   // Проверка на наличие значений в 1 переменной и вывод ответа если их нет
    else if (empty($a) || empty($b) || empty($c)) {
            if (empty($a)) {
                echo "Нет переменной a";
            } else if (empty($b)) {
                echo "Нет переменной b";
            } else if (empty($c)) {
                echo "Нет переменной c";
            } 
    } 
    }

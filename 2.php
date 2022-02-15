<?php

        // Проверка на наличие информации в переменных
    if (!empty($a)  && !empty($b)  && !empty($c) ) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c']; 
        // Преобразование строк в int
        $a = +$a;
        $b = +$b;
        $c = +$c;
        //Выполнение математического уровнения
        $result = " $a + $b * $c =  " . $a + $b * $c;
        // Проверка на наличие значений во всех переменных сразу и вывод ответа если их нет
    }   else if (empty($a) && empty($b) && empty($c)) {
        $result = "Нет переменных a, b и c";
    }   // Проверка на наличие значений в 2 переменных и вывод ответа если их нет
         else if (empty($a) && empty($b) || empty($a) && empty($c) || empty($b) && empty($c)) {
            if (empty($a) && empty($b)) {
                $result = "Нет переменных a и b";}
            else if (empty($a) && empty($c)) {
                $result = "Нет переменных a и c";}
            else if (empty($b) && empty($c)) {
                $result = "Нет переменных b и c";}
    }   //   // Проверка на наличие значений в 1 переменной и вывод ответа если их нет
    else if (empty($a) || empty($b) || empty($c)) {
            if (empty($a)) {
                $result = "Нет переменной a";
            } else if (empty($b)) {
                $result = "Нет переменной b";
            } else if (empty($c)) {
                $result = "Нет переменной c";
            } 
    } 


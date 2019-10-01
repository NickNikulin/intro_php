/*
Intro PHP. Homework 1/3
Explain how this code works.
Nick Nikulin, dated 01.10.2019
Teacher, Oleg Arestov.
*/

<?php
$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true?
// потому что php считает 05 и 5 равными, кавычки при этом не учитываются.
// Функция var_dump показывает информацию о переменной включая тип и значение.
var_dump((int)'012345');                        // Почему 12345?
//Потому что вручную присвоено значение int целочисленный тип данных
var_dump((float)123.0 === (int)123.0); // Почему false?
// Потому что различные типы данных не равны float != int
var_dump((int)0 === (int)'hello, world'); // Почему true?
// Потому что hello, world преобразован в целочисленный тип данных со значением 0


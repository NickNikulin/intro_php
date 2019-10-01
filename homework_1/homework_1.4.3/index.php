<?php
/*
Intro PHP. Homework 1/4/3
Nick Nikulin, dated 01.10.2019
Teacher, Oleg Arestov.
*/

$title = "Главная страница - страница обо мне";
$header = "Информация обо мне";
$year = 2019;
$content = file_get_contents("site.tmpl");
$content = str_replace("{{title}}", $title, $content);
$content = str_replace("{{header}}", $header, $content);
$content = str_replace("{{year}}", $year, $content);
echo $content;

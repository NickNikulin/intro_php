<?php
/*
Intro PHP. Homework 1/4/1
Nick Nikulin, dated 01.10.2019
Teacher, Oleg Arestov.
*/
$title = "Главная страница - страница обо мне";
$header = "Информация обо мне";
$year = 2019;
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
</head>
<body>
<h1><?php echo $header;?></h1>
Краткая биография обо мне
Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
На данный момент работаю ведущим инженером в крупной авиакомпании.
Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
фотографиями на эту тему
<br><br>
Тут можете поместить картинку
<br><br>
<br><br>
<b>Просто пример жирного текста</b>
<br><br>
<?php echo $year;?>
</body>
</html>
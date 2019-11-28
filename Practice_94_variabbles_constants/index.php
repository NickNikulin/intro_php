<?php

$var = "Hello";

echo $var;
define("PAGE", "new page");

?>

<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $var ?></title>
</head>
<body>

<h1><?php echo $var ?></h1>
<h1><?php echo PAGE ?></h1>
<p><?php echo $var?></p>

</body>
</html>



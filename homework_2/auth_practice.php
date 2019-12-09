<?php
$login = "admin";
$pass = "123";
$auth = false;

if ($login == "admin" && $pass == "123") {
    $auth = true;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<? if ($auth == true):?>
    Добро подаловать <?= $login ?>
<? else:?>
<form>
    <input type="text">
    <input type="password">
    <input type="submit" value="Войти">
</form>>
<? endif; ?>
</body>
</html>

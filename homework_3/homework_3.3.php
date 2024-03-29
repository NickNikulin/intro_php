<?php
$towns = [
    "Московская область" => ["Лотошино", "Павловский пасад", "Красногорск", "Краснознаменск"],
    "Ленинградская область" => ["Каменогорск", "Кировск", "Выборг", "Тосно"],
    "Свердловская область" => ["Екатеринбург", "Нижний", "Тагил", "Качканар", "Красноуфимск"],
    "Челябинская область" => ["Магнитогорск", "Коркино", "Озерск", "Аша"],
    "Иркутская область" => ["Зима", "Ангарск", "Братск", "Киренск"]
];

foreach ($towns as $key => $region) {
    echo $key . ':<br>';
    $str = "";
    foreach ($region as $town) {
        if (mb_substr($town, 0, 1, "UTF - 8") === 'К'){
            $str .= $town . ", ";
        }
    }
    $str = mb_substr($str, 0, -2) . '<br>';
    echo "$str <br>";
}
echo '<hr><br>';

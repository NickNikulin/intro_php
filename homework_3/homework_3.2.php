<?php

$i =0;
do {
    if ($i == 0)
        echo $i . " - ноль <br>";
    elseif ($i & 1 != 0)
        echo $i . " - не четное часло<br>";
    else
        echo $i . " - четное число<br> ";
    $i++;
} while ($i <= 10);



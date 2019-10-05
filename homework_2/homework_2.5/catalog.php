<?php

renderTemplate('layout');
renderTemplate('catalog');

function renderTemplate($page)
{
    include "./templates/{$page}.php";
}

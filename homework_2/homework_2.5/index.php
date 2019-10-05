<?php

renderTemplate('layout');
renderTemplate('index');

function renderTemplate($page)
{
    include "./templates/{$page}.php";
}

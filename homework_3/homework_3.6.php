<?php
$menu = [
    [
        "title" => "Главная",
        "href" => "/",
        "color" => "blue"
    ],
    [
        "title" => "Каталог",
        "href" => "/catalog",
        "subitems" => [
            [
                "title" => "Исторические поездки",
                "href" => "/catalog/tours"
            ],
            [
                "title" => "Паломническеи поездки",
                "href" => "/catalog/tours/monastery",
                "subitems" => [
                        [
                            "title" => "Мощи Святых",
                            "href" => "/catalog/tours/relics"
                        ],
                        [
                            "title" => "Монастыри",
                            "href" => "/catalog/tours/monastery"

                        ],
                    ]
                ]
            ]
        ],
    [
        "title" => "Специальные предложения",
        "href" => "/catalog/tours/sale"
    ],
    ];


$result = "<ul>";
$result .= menuRender ($menu);
$result .= "</ul>";

echo $result;

function menuRender($menu_array) {
    $result = "";

    foreach($menu_array as $item) {
        $result .= "<li><a href='{$item['href']}' > {$item['title']}</a>";

        if(isset($item["subitems"])) {
            $result .= "<ul>";
            $result .= menuRender($item["subitems"]);
            $result .= "</ul>";
        }

        $result .= "</li>";
    }
    return $result;
}

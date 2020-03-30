<?php

function spustit($controller, $akce)
{
    // nahrani prislusneho zdrojoveho souboru
    switch($controller)
    {
        case "stranky":
            require_once "controllery/".$controller."_controller.php";
            $controller = new StrankyController();
            break;
        case "prispevky":
            require_once "modely/Prispevek.php";
            require_once "controllery/".$controller."_controller.php";
            $controller = new PrispevkyController();
            break;
    }

    $controller->{ $akce }();
}

// definice dostupnych (povolenych) controlleru a jejich akci
$controllery = array(
    "stranky" => array(
        "domu",
        "chyba",
    ),
    "prispevky" => array(
        "pridat",
        "pridani",
        "detail",
        "chyba",
        "prehled",
        "smazat",
        "edit",
        "editace"
    ),
);

// neplatne controllery a akce se presmeruji na chybovou stranku
if(array_key_exists($controller, $controllery) && in_array($akce, $controllery[$controller]))
{
    spustit($controller, $akce);
}
else
{
    spustit("stranky", "chyba");
}

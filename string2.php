<?php

$preis = "10,99";

function showPrice(float $price) : void {
    echo $price."\n";
}

function priceToDe(float $price) : string {
    return str_replace('.', ',', $price);
}

function deToPrice(string $price) : float {
    return str_replace(',', '.', $price);
}


showPrice($preis);
showPrice(deToPrice($preis) + 200);

$str = "Lorem ipsum dolor";

echo substr($str, 10)."\n"; // String ab Position 10 bis Ende
echo substr($str, 10, 30)."\n"; // Ab Position 10 30 Zeichen
echo substr($str, -5)."\n"; // Beginnt am Ande und zählt 5 Zeichen zurück
echo substr($str, -5, 2)."\n"; // Beginnt am Ande und zählt 5 Zeichen zurück, gibt 2 Zeichen aus

echo nl2br("Hallo \n... \n...");

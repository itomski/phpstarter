<?php

require 'includes/autoload.php';

$p1 = new Product('Tasse', 'Keramik, blau', 5.99);

// Da die eigenschaft protected ist, wird hier __get verwendet
echo $p1->name."\n";

// Da die eigenschaft nicht vorhanden ist, wird hier __get verwendet
echo $p1->price."\n";
echo $p1->description."\n";

$p1->name = 'Bla bla bla';
$p1->blabla = 'Bla bla bla';

//print_r($p1);

$p1->machDiesundDas(1,2,3,4);

unset($p1);

echo 'ENDE';
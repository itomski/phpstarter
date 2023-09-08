<?php

// Bauplan

class Book {
    public $title; // Attribut/Eigenschaft
}

$b1 = new Book(); // Book wird instanziert
$b2 = new Book();

var_dump($b1);

// stdClass ist eine Klasse, die ein leeres Objekt darstellt
$obj = new stdClass();
var_dump($obj);

$arr = ['Peter', 'Parker'];
var_dump($arr);

echo '#'.($b1 == $b2)."\n"; // die Objekte sind Gleich
echo '#'.($b1 === $b2)."\n"; // Ist es das gleiche Objekt

$b2 = $b1; // Hier wird automatisch eine Referenz von $b1 auf $b2 gelegt

// b1 und b2 verlinken das gleiche Objekt
echo '#'.($b1 === $b2)."\n"; // b1 und b2 sind Zeiger/Verlinkung auf das gleiche Objekt


// primitive Datentypen werden per default als Kopien weitergegeben
// komplexe Datentypen (Objekte) werden per default als Referenzen weitergegeben

$x = 10;
$y = 20;
$y = $x; // y bekommt eine Kopie von x zugewiesen
$x = 15; // Hat keine Auswirkungen auf y (y: 10 und x: 15)

$x = 10;
$y = 20;
$y = &$x; // y bekommt eine Referenz auf den Wert von x zugewiesen
$x = 15; // Hat Auswirkungen auch auf y (y: 15 und x: 15)


$b1 = new Book();
$b2 = new Book();

var_dump($b1);
var_dump($b2);

$b2 = $b1;

$b1->title = 'Kochen ohne Fett';

var_dump($b1);
var_dump($b2);
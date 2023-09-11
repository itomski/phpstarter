<?php

session_start();
// Schutz gegen Session-Fixierung. Beim Aufruf des Scripts wird die Sessin-ID geändert
session_regenerate_id();

// Klassenfiles werden geladen
require_once 'includes/autoload.php';

if(!isset($_SESSION['parkhaus'])) {
    $adresse = new Adresse('Parksmart AG', 'Parkstraße', '17a', '23456', 'Musterfeld');
    //$adresse = 'Hallo Welt';
    //echo $adresse->getNr(); // Error: Typ der Variable ist string

    $parkhaus = new Parkhaus($adresse);
    $_SESSION['parkhaus'] = $parkhaus;
}



// Parameter muss vom Typ Adresse sein
$parkhaus->setAdresse($adresse);

$fahrzeug1 = new Fahrzeug();

$parkhaus->addFahrzeug($fahrzeug1);
// $parkhaus->addFahrzeug('Bla bla bla');

print_r($parkhaus);


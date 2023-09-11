<?php

// Klassenfiles werden geladen
require_once 'includes/autoload.php';
require_once 'includes/conf.php';

session_start();
// Schutz gegen Session-Fixierung. Beim Aufruf des Scripts wird die Sessin-ID geändert
session_regenerate_id();


if(!isset($_SESSION['parkhaus'])) {
    
    $adresse = new Adresse('Parksmart AG', 'Parkstraße', '17a', '23456', 'Musterfeld');
    //$adresse = 'Hallo Welt';
    //echo $adresse->getNr(); // Error: Typ der Variable ist string

    $parkhaus = new Parkhaus($adresse);

    // Neues Parkhaus in die Session schreiben
    $_SESSION['parkhaus'] = $parkhaus;
    
    // In einer Zeile
    // $_SESSION['parkhaus'] = new Parkhaus(new Adresse('Parksmart AG', 'Parkstraße', '17a', '23456', 'Musterfeld'));
}

$parkhaus = $_SESSION['parkhaus']; // Parkhaus aus der Session lesen

// Parameter muss vom Typ Adresse sein
//$parkhaus->setAdresse($adresse); // Wurde bereits im Konstruktor gesetzt

if(isset($_GET['clear'])) {
    $parkhaus->clearFahrzeuge();
}


if(!empty($_POST)) {
    $fahrzeug = new Fahrzeug();
    // Daten aus dem Post werden in das Objet abgelegt
    $fahrzeug->setKennzeichen($_POST['kennzeichen']);
    $fahrzeug->setMarke($_POST['marke']);
    $fahrzeug->setTyp($_POST['typ']);
    $fahrzeug->setBaujahr($_POST['baujahr']);
    $fahrzeug->setStatus($_POST['status']);
    // Das Fahrzeug wird dem Parkhaus zugeordnet
    // parkhaus liegt in der Session, es wird daher die Session angepasst
    $parkhaus->addFahrzeug($fahrzeug);
}

// $parkhaus->addFahrzeug('Bla bla bla');

debug($parkhaus);

include 'views/parkhausview.php';
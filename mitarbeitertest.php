<?php

include 'includes/autoload.php';

// LeitenderMitarbeiter IS-A Mitarbeiter

$m1 = new LeitenderMitarbeiter();
//$m1->setPersonalNr(123);
$m1->setTeam('T15-32');

$m1->machEtwas();
$m1->sagHallo();

print_r($m1);

//$m2 = new Mitarbeiter(); // Error: Abstrakte Klassen können nicht instanziert werden
//$m2->setPersonalNr(345);
//print_r($m2);

function checkMitarbeiter(Mitarbeiter $m) {
    echo 'Personal-Nr: '.$m->getPersonalNr();
}

checkMitarbeiter($m1);
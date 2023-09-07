<?php

use User as GlobalUser;

$user = ['Peter', 'Parker', '25.07.2000', true];

// Ein Array erzwing nicht die Verfügbarkeit bestimmer Keys
$user = ['vorname' => 'Peter', 
         'nachname' => 'Parker', 
         'geburtsdatum' => '25.07.2000', 
         'neukunde' => true];

$user[] = 'Hamburg';
// Es kann Manipuliert werden, so, dass die ursprüngliche Struktur verloren geht

// Eine Klasse ist der Bauplan für ein User Objekt
// Ein Objekt ist ein Träger von Informationen und Funktionalität
class User {

    public $vorname = "Unbekannt"; // Defaultwert
    public $nachname;
    public $geburtsdatum;
    public $neukunde;

    // Methode: Funktionen die zu Klassen gehören nennt man Methoden
    function sagHallo() {
        echo 'Mein Name ist '.$this->vorname.' '.$this->nachname."\n";
    }
}

$user1 = new User(); // Aus dem Bauplan wird eine Instanz/Objekt erstellt
$user2 = new User();
$user3 = new User();

$user1->vorname = 'Peter';
$user1->nachname = 'Parker';

echo $user1->vorname."\n";
// echo $user1->xyz."\n"; // Fehler! Eigenschaft in der Klasse nicht verfügbar
echo $user2->vorname."\n";

$user1->sagHallo();
$user2->sagHallo();
$user3->sagHallo();

// Bei einem Array
echo "Mein Name ist ".$user['vorname'].' '.$user['nachname'];






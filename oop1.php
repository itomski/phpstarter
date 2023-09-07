<?php

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

}
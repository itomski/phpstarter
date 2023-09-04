<?php

$name = 'Peter'; // string Variable
$name = 'Carol'; // Peter wird durch Carol ersetzt

$namen = []; // leeres array
$namen[] = 'Peter'; // string Peter wird an die nächste freie Position gepackt - Index: 0
$namen[] = 'Carol'; // Index: 1
$namen[] = 'Bruce'; // Index: 2
// Aktuell sind 3 Strings in der $namen-Variable drin

// Person
$vorname = 'Peter';
$nachname = 'Parker';
$alter = 18;
$wohnort = 'New York';
// obige Variablen haben keine Beziehung zu einander. Der Entwickler muss aufpassen, dass die Daten zusammenbleiben

// Person (Array)
$person1 = ['Peter', 'Parker', 18, 'New York'];
// Alle Infos liegen in einer Variable - jede Information ist über einen Index ansprechbar
echo $person1[2];

$person1 = ['vorname' => 'Peter', 'nachname' => 'Parker', 'alter' => 18, 'wohnort' => 'New York'];
// Alle Infos liegen in einer Variable - jede Information ist über einen Schlüssel ansprechbar
echo $person1['alter'];

$personen = [];
$personen[] = $person1;
$personen[] = ['vorname' => 'Bruce', 'nachname' => 'Banner', 'alter' => 28, 'wohnort' => 'Boston'];
$personen[] = ['vorname' => 'Carol', 'nachname' => 'Danvers', 'alter' => 32, 'wohnort' => 'Californien'];
$personen[] = ['vorname' => 'Tony', 'nachname' => 'Stark', 'alter' => 32, 'wohnort' => 'Californien'];

/*
// Array
    // 1. Dim
    0 =>
        // 2. Dim
        'vorname' => Peter 
        'nachname' => Parker 
        'alter' => 32 
        'wohnort' => New York 
    1 => ...
    2 => ...
*/


// $personen ist eine Sammlung von Personen

print_r($personen);

function printPersonen(array $sammlung): void { // void = keine Rückgabe

    // Läuft das Array durch legt die zweite Dimension jeweils in die Variable $person ab
    foreach($sammlung as $person) {
        echo "Das ist {$person['vorname']} {$person['nachname']} \n";
    }
}

printPersonen($personen);

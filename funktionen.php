<?php

// Parameter der Funktion sind der Input
function fleischwolf(string $input) : string { // $input soll ein String sein, Rücgabetyp ist string
    $input .= ' gehackt, ';
    return $input; // Rückgabewert, Rückgabetyp string
    //return 100; // Rückgabetyp int
}

// Eingangsparameter ist ein oder mehrere Strings
function fleischwolf2(string ...$input) : string { // $input ist ein array, der alle Argumente enthält
    $input = implode(', ', $input);
    $input .= ' alles gehackt, ';
    return $input;
}

function fleischwolf3(array $input) : string {
    $input = implode(', ', $input);
    $input .= ' alles gehackt, ';
    return $input;
}

$output = fleischwolf('Fleisch');
echo $output;

$output = fleischwolf('Handy');
echo $output;

$output = fleischwolf('Brot');
echo $output;

$output = fleischwolf(100); // Die 100 wird zum string konvertiert (wenn nicht strict mode aktiv ist)
echo $output;

// Rückgabewert der Inneren Funktion wird als Argument der Äußeren benutzt
$output = fleischwolf(fleischwolf('Melone'));
echo $output;

echo '<br>';

// Aufruf einer Variadischen Funktion - kann eine flexible Anzahl Parameter übernehmen (0 bis n)
//$output = fleischwolf('Melone', 'Butter', 'Käse', 'Fleisch'); // Verarbeitet nur den ersten Parameter

//$output = fleischwolf2('Melone', 'Butter', 'Käse', 'Fleisch');
$output = fleischwolf2('Melone', 'Butter');
$output = fleischwolf2();
$output = fleischwolf3(array('Melone', 'Butter')); // Erwartet ein Array
echo $output;


?>

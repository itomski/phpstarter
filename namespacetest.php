<?php

// Ohne angabe eines Namespace liegt alles in \ d.h. globalen Namenspace
namespace nextapp;
// Ohne namespace-Angabe wird im globalen Namensraum gesucht

include 'namespaceinclude.php';
include 'namespaceinclude2.php';
include 'namespaceinclude3.php';
include 'namespaceinclude4.php';

use \basic\printers\special\Printer; // \basic\printers\special\Printer wird unter Namen Printer erreichbar
// use \extended\printers\next\Printer; // Error: Namenskonflikt. Name Printer ist schon in Verwendung
use \extended\printers\next\Printer as NextPrinter; // Dieser Printer wird unter dem namen NextPrinter nutzbar

use \extended\printers\next as path; // Ein Teilpfad wird unter dem Alias path hinterlegt
// Verkürt den Inport mehrerer Klassen aus dem gleichen Namespace
//use path\Printer1;
//use path\Printer2;
//use path\Printer3;


/* Nicht im globalen Namensraum sichtbar
echo PI."\n";
sagWas();

$g = new Game();
$g->setName('Schach');
echo $g->getName();
*/

// Zugriff auf Konstanten eines anderen Namensraums
echo \myapp\PI."\n"; // sucht in \myapp\PI

// Ohne \ am Anfang wird davon ausgegangen, dass es ein Sub-Namespace ist
// echo myapp\PI."\n"; // ERROR: sucht in \nextapp\myapp\PI

echo \myapp\sagWas();
echo \otherapp\sagWas();

$g = new \myapp\Game();
$g->setName('Schach');
echo $g->getName();

$p1 = new \basic\printers\special\Printer();
$p1 = new Printer(); // wegen dem use auch ohne Namespace nutzbar
$p2 = new NextPrinter();


// Function wird aus dem globalen Namesraum benutzt
echo substr('Hallo Welt', 3);

// Nach der Deklaration dieser Funktion wird diese statt der globalen genutzt
function substr(string $str) {
    return strtolower($str);
}

echo substr('Hallo Welt', 3); // verwendet nextapp\substr()
echo \substr('Hallo Welt', 3); // verwendet \substr() von PHP
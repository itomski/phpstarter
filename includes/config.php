<?php

session_start();
// error_reporting(0); // Alle abschalten
// error_reporting(E_ALL); // Alle anzeigen
//error_reporting(E_ERROR); // Nur schwergewichtige Fehler
//error_reporting(E_ERROR | E_WARNING); // Nur schwergewichtige Fehler und Warnungen
error_reporting(E_ALL & ~E_NOTICE); // Alle, außer Notitzen anzeigen

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

const DB_HOST = 'localhost';
const DB_PORT = 8889;
const DB_NAME = 'phpstarter';
const DB_USER = 'root';
const DB_PASSWORD = 'root';


// Stellt die Verbindung zur DB her
try { // Versuche den CODE im try auszuführen
    // 3 Alternativen, die das gleiche machen

    $dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASSWORD, $options); // Auf XAMP 3306
    
    // $_ ist nötig, da Konstanten in Strings nicht ausgewertet werden
    // $dbh = new PDO("mysql:host={$_(DB_HOST)};dbname={$_(DB_NAME)};port={$_(DB_PORT)}", DB_USER, DB_PASSWORD, $options); // Auf XAMP 3306
    
    // $dsn = sprintf('mysql:host=%s;dbname=%s;port=%s', DB_HOST, DB_NAME, DB_PORT);
    // $dbh = new PDO($dsn, DB_USER, DB_PASSWORD, $options); // Auf XAMP 3306
}
catch(Exception $e) { // fange den Fehler
    print_r($e);
    exit(); // Programm beenden;
}
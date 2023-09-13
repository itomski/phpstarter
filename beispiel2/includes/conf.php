<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Wird für das automatische Leden der Klassen benutzt
spl_autoload_register(function ($className) {
    // TODO: Um Namespaces erweitern
    require_once 'classes/'.$className.'.php';
});

// Ist in DbHelper verbaut
/*
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
];
*/

// Zugangsdaten für die DB
// Konstanten außerhalb von Klassen sind automatisch global
const DB_HOST = 'localhost';
const DB_PORT = 8889;
const DB_NAME = 'phpstarter';
const DB_USER = 'root';
const DB_PASSWORD = 'root';

// Ist in DbHelper verbaut
/*
$dbh = null;

// In einen DBHelper auslagern
try { 
    $dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASSWORD, $options);
}
catch(Exception $e) {
    // exit();
    die();
}
*/
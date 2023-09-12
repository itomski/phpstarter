<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($className) {
    require_once 'classes/'.$className.'.php';
});

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
];

const DB_HOST = 'localhost';
const DB_PORT = 8889;
const DB_NAME = 'phpstarter';
const DB_USER = 'root';
const DB_PASSWORD = 'root';

$dbh = null;

try { 
    $dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASSWORD, $options);
}
catch(Exception $e) {
    exit();
}
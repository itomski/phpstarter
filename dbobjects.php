<?php

require_once 'includes/autoload.php';
const DEBUG = true;
require_once 'includes/conf.php';

// DSN = Data Source Name
$dsn = "mysql:host=localhost;port=8889;dbname=phpstarter";

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_PERSISTENT => true, // Verwendet eine offene Verbindung wieder
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
];

function saveUser(PDO $dbh, User $user) {
    $sql = 'INSERT INTO users (id, firstname, lastname, location) VALUES(NULL, ?, ?, ?)';
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$user->getFirstname(), $user->getLastname(), $user->getLocation()]);
}

try {
    // Verbindung zu DB aufbauen
    $dbh = new PDO($dsn, 'root', 'root', $options);

    $sql = 'SELECT * FROM users';
    $stmt = $dbh->query($sql); // Anfrage abschicken

    // Ändert die Abfrage von Array auf User-Objects
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');

    $results = $stmt->fetchAll(); // Ergebnisse abholen

    debug($results);

    foreach($results as $user) {
        echo $user."\n"; // Verwendet automatisch die __toString-Methode
    }


    $user = new User();
    $user->setFirstname('Natasha');
    $user->setLastname('Romanov');
    $user->setLocation('Berlin');
    saveUser($dbh, $user);


}
catch(Exception $e) {
    print_r($e);
}



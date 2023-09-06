<?php

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

// Stellt die Verbindung zur DB her
try {
    $dbh = new PDO('mysql:host=localhost;dbname=phpstarter;port=8889', 'root', 'root', $options); // Auf XAMP 3306
}
catch(Exception $e) {
    print_r($e);
    exit(); // Programm beenden;
}

function getAllUsers(PDO $dbh) : array {
    $stmt = $dbh->query('SELECT * FROM users'); // PDOStatement: Führt die Anfrage aus
    $results = $stmt->fetchAll(); // Hollt alle Datensätze für die Anfrage
    //print_r($dbh->errorInfo()); // Enthält Fehler, wenn vorhanden
    //print_r($results);
    return $results;
}

$users = getAllUsers($dbh);

foreach($users as $user) {
    echo $user['firstname'].' '.$user['lastname']."\n";
}
<?php

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

// Stellt die Verbindung zur DB her
try { // Versuche den CODE im try auszuführen
    $dbh = new PDO('mysql:host=localhost;dbname=phpstarter;port=8889', 'root', 'root', $options); // Auf XAMP 3306
}
catch(Exception $e) { // fange den Fehler
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

// PreparedStatements werden verwendet, wenn der Query dynamisch Daten von Außen enthält

// Hier ist eine SQL-Injection möglich! Gefahr!!!!!!
function findUserByFirstname(PDO $dbh, string $firstname) : array {
    $stmt = $dbh->query("SELECT * FROM users WHERE firstname = '{$firstname}'");
    $results = $stmt->fetchAll();
    return $results;
}

// Besser
function findUserByFirstname2(PDO $dbh, string $firstname) : array {

    $sql = 'SELECT * FROM users WHERE firstname = ?';
    $stmt = $dbh->prepare($sql); // Querry-Templae wird an die DB geschickt
    $stmt->execute([$firstname]); // Werte für die Platzhalter im Template werden übertragen und ausgeführt
    $results = $stmt->fetchAll(); // Result-Set wirden abgeholt
    return $results;
}

function saveNewUser(PDO $dbh, string $firstname, string $lastname, string $location) : void {
    $sql = 'INSERT INTO users (id, firstname, lastname, location) VALUES(NULL, ?, ?, ?)';
    $stmt = $dbh->prepare($sql);
    // Reihenfolge der Fragezeichen muss beachtet werden
    $stmt->execute([$firstname, $lastname, $location]);
}

function saveNewUser2(PDO $dbh, array $user) : void {
    // Verlangt beim execute ein Assoziatives Array!
    $sql = 'INSERT INTO users (id, firstname, lastname, location) VALUES(NULL, :firstname, :lastname, :location)';
    $stmt = $dbh->prepare($sql);
    // Zuordnung erfolgt nach Array-Keys
    $stmt->execute($user); // Verlangt ein Array
}

//saveNewUser($dbh, 'Bruce', 'Banner', 'Danver');

$u1 = ['firstname' => 'Tony', 'location' => 'Boston', 'lastname' => 'Stark'];
saveNewUser2($dbh, $u1);

$users = getAllUsers($dbh);
//$users = findUserByFirstname($dbh, 'Carol');

foreach($users as $user) {
    echo $user['firstname'].' '.$user['lastname']."\n";
}
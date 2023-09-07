<?php

// Configuration der Datenbank wurde in eine eigene Datei ausgelagert
require_once 'includes/config.php';

// Funktionen für die Abfrage der Daten wurden in eine eigene Datei ausgelagert
require_once 'includes/functions.php';

//saveNewUser($dbh, 'Bruce', 'Banner', 'Danver');

$u1 = ['firstname' => 'Tony', 'location' => 'Boston', 'lastname' => 'Stark'];
saveNewUser2($dbh, $u1);

$users = getAllUsers($dbh);
//$users = findUserByFirstname($dbh, 'Carol');

foreach($users as $user) {
    echo $user['firstname'].' '.$user['lastname']."\n";
}
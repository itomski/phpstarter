<?php

const DEBUG = true;

require_once 'includes/conf.php';

$obj = new stdClass();

// Eigenschaften werden in das Objekt eingefügt
$obj->vorname = 'Peter';
$obj->nachname = 'Parker';
$obj->geburtsDatum = time();

// echo $obj->geburtsDatum;

debug($obj);

$arr = [
    'vorname' => 'Carol',
    'nachname' => 'Danvers',
    'geburtsDatum' => time()
];

$obj2 = (object) $arr; // Aus dem Array wird ein Objekt gebildet

debug($obj2);
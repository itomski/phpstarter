<?php

// CommandLineRunner hat keinen root-Ordner
require '/beispiel2/includes/conf.php';

$mapper = new PageMapper($dbh);
$pages = $mapper->findAll();

print_r($pages);
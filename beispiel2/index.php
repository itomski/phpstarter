<?php

require 'includes/conf.php';

$mapper = new PageMapper($dbh);
$pages = $mapper->findAll();

print_r($pages);
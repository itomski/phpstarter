<?php

// 1. Conf-File auf die eigenen Zugangsdaten anpassen
// 2. Tabelle pages in der DB anlegen
// 3. in pages ein Datensatz mit der action home anlegen 

require 'includes/conf.php';

$controller = new Controller();
$controller->run();
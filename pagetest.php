<?php

require_once 'model/data.php';

// Controller                    
//$action = $_GET['a']; // Nicht save
$action = filter_input(INPUT_GET, 'a'); // Save

$tpl = 'standard';

// $_GET, $_POST, $_REQUEST werden von PHP automatisch bereitgestellt und befüllt
// $_GET enthält alle Parameter, die an der URL hängen
// $_POST enthält alles, das mit der POST-Methode verschickt wurde (z.B. Formulardaten)
// $_REQUEST enthält alles auf $_GET und $_POST
// print_r($_GET);

// print_r($_POST);

// print_r($_REQUEST);

// Controller: Verbindet die passenden Daten mit der passenden View

switch($action) {
    case 'products':
        $page = $pages['products'];
        break;

    case 'submit':
        $page = $pages['submit'];
        break;    

    case 'contact':
        $page = $pages['contact'];
        $tpl = 'contact';
        break;

    default:
        $page = $pages['home'];
}

// View
include 'views/'.$tpl.'.php'; // Bindet das Template ein
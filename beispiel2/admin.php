<?php

require 'includes/conf.php';

$action = filter_input(INPUT_GET, 'a');
$id = filter_input(INPUT_GET, 'id');

$mapper = new PageMapper();

switch($action) {

    case 'edit': break;

    case 'delete': break;

    case 'new':
        $tpl = 'page_form';
        break;

    case 'save':
        $page = new Page($_POST); // TODO Daten validieren
        $mapper->save($page);
        header('location: admin.php'); // Umleitung auf die Übersicht
        die(); // Script wird nach der Umleitung beendet
        break;

    default:
        $pages = $mapper->findAll();
        $tpl = 'page_list';
}

include 'tpl/'.$tpl.'.php';
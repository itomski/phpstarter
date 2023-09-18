<?php

// Backend mit Login versehen
// CSS ins Backend einbinden
// HTML-Editor für den Content einbinden
// Templates automatisch einlesen
// Löschen so ändern, dass Pages als gelöscht markiert werden

require 'includes/conf.php';

$action = filter_input(INPUT_GET, 'a');
$id = filter_input(INPUT_GET, 'id');

// POST-Daten säubern
$cleanFormData = filter_var_array($_POST, FILTER_SANITIZE_STRING);
//print_r($_POST);
//print_r($cleanFormData);

$mapper = new PageMapper();


switch($action) {

    case 'edit':
        $page = $mapper->findOneById($id);
        if($page) {
            $tpl = 'page_form';
        }
        else {
            // TODO: Anzeigen, dass die gewünschte Seite nicht verfügbar ist
            header('location: admin.php');
            die();
        }
        break;

    case 'delete': 
        // TODO: Vor dem Löschen nachfragen
        if($id > 0) {
            $mapper->deleteById($id);
        } 
        header('location: admin.php');
        die();
        break;

    case 'new':
        $page = new Page(); // Nötig, da im Formular auf Methoden von Page zugegriffen wird
        $tpl = 'page_form';
        break;

    case 'save':
        $page = new Page($cleanFormData); // TODO Daten validieren
        $mapper->save($page);
        // echo $page->getId();
        // TODO: Duplikate bei action und label abfangen
        header('location: admin.php'); // Umleitung auf die Übersicht
        die(); // Script wird nach der Umleitung beendet
        break;

    default:
        $pages = $mapper->findAll(false);
        $tpl = 'page_list';
}

include 'tpl/'.$tpl.'.php';
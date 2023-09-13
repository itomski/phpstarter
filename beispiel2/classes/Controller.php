<?php

class Controller {

    private const DEFAULT_ACTION = 'home';

    private $mapper;

    function __construct()
    {
        // Mapper gibt und Zugriff auf die Daten der DB
        $this->mapper = new PageMapper();
    }

    function run() {

        // URL Rewriting
        //https://www.unserblog.de/products/123 -> https://www.unserblog.de/index.php?a=products&nr=123
        
        // Abfrage der Pages für das Erzeugen der Navigation
        $pages = $this->mapper->findAll(); // TODO: Nur Navigationselemente

        $action = filter_input(INPUT_GET, 'a');

        if($action) {
            // Aus der DB wird Page passend zu action geholt
            $page = $this->mapper->findOneByAction($action); // Inhalt
            
            if($page == null) { // Wenn keine passende Page in der DB gefunden wird
                $page = $this->mapper->findOneByAction(self::DEFAULT_ACTION); // Default-Page
            }
        }
        else {
            // Wird verwendet wenn das URL-Attribut a leer ist
            $page = $this->mapper->findOneByAction(self::DEFAULT_ACTION); // Default-Page
        }
        // Ausgabe des Page-Objektes in dem Template

        $tpl = 'tpl/'.$page->getTemplate().'.php';
        if(file_exists($tpl)) { // Prüft, ob die gewünschte Vorlage vorhanden ist
            $subtemplate = $tpl;
        }

        include 'tpl/standard.php';
    }
}
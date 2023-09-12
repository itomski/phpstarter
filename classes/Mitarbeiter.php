<?php

abstract class Mitarbeiter {

    // static Eigeschaften gehören der Klasse
    // Alle Objekte der gleichen Klasse teilen sich eine Eigenschaft
    private static $count = 0;

    private $personalNr;

    function __construct()
    {
        // self erlauf Zugriff auf statische eigenschaften
        $this->personalNr = ++self::$count;
    }

    public function getPersonalNr()
    {
        return $this->personalNr;
    }

    /*
    public function setPersonalNr($personalNr): void
    {
        $this->personalNr = $personalNr;
    }
    */
}
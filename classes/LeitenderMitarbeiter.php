<?php

class LeitenderMitarbeiter extends Mitarbeiter {

    // Einbindung des Traits
    use SpecialFunctions;

    protected $team;

    public function getTeam()
    {
        return $this->team;
    }

    public function setTeam($team): void
    {
        $this->team = $team;
    }

    // Überschreiben einer Methode aus der Elternklasse
    public function getPersonalNr()
    {
        // return $this->personalNr.'L'; // Error: personalNr ist privat
        // return $this->getPersonalNr().'L'; // Error: rekursiver aufruf der überschriebenen getPersonalNr() Methode
        
        // parant erlauf Aufrufe auf Methoden der Elternklasse
        // nur nötig, wenn Methode lokal überschrieben ist
        return parent::getPersonalNr().'L';
    }
}
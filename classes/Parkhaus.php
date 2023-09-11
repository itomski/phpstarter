<?php

class Parkhaus {

    protected $fahrzeuge = [];

    protected $adresse;

    protected $groesse = 10;

    function __construct(Adresse $adresse) {
        $this->adresse = $adresse;
    }
    
    public function getAdresse(): Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(Adresse $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * Get the value of fahrzeuge
     */
    public function getFahrzeuge(): array
    {
        return $this->fahrzeuge;
    }

    /**
     * Set the value of fahrzeuge
     */
    // Prüfung auf den Typ des Parameters erfolgt beim Verwernden der Methode
    /* public function addFahrzeug(Fahrzeug $fahrzeug): void
    {
        $this->fahrzeuge[] = $fahrzeug;
    }
    */

    public function addFahrzeug(object $fahrzeug): void
    {
        // Prüfung auf den Typ des Parameters erfolgt zur Laufzeit der Methode
        if($fahrzeug instanceof Fahrzeug) {
            $this->fahrzeuge[] = $fahrzeug;
        }
    }
}
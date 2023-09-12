<?php

class Pkw {

    protected $kennzeichen;
    protected $marke;
    protected $typ;
    protected $motor;

    function __construct(string $kennzeichen, string $marke, string $typ, Motor $motor)
    {
        $this->kennzeichen = $kennzeichen;    
        $this->marke = $$marke;
        $this->typ = $typ;
        $this->motor = $motor;    
    }

    function fahreVerwaerts() {
        // Die gibGas Methode wird auf dem eigentlichen Typ des Motors ausgeführt (Benzin oder Elektro)
        $this->motor->gibGas();
    }
}
<?php

class Haus {

    // Objekte können andere Objekte enthalten
    protected $raeume = [];

    function __construct(Raum ...$raeume)
    {
        $this->raeume = $raeume;    
    }

    public function printRaumListe() {

        foreach($this->raeume as $raum) {
            // Aufruf der Methoden eines anderen Objekts
            echo 'Nr: '.$raum->getNr().', Größe: '.$raum->getGroesse().' qm'."\n";
        }
    }
}

class Raum {

    protected $nr;
    protected $groesse;

    function __construct($nr, $groesse) {
        $this->nr = $nr;
        $this->groesse = $groesse;
    }

    /**
     * Get the value of groesse
     */
    public function getGroesse()
    {
        return $this->groesse;
    }

    /**
     * Get the value of nr
     */
    public function getNr()
    {
        return $this->nr;
    }
}

$raum1 = new Raum(1, 16);
$raum2 = new Raum(2, 25);
$raum3 = new Raum(3, 18);
$raum4 = new Raum(4, 50);

$haus = new Haus($raum1, $raum3, $raum4);
$haus->printRaumListe();
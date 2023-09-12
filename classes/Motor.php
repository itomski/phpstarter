<?php

abstract class Motor {

    protected $leistung;
    
    // Die Kindklassen werden gezwungen diese Methode einzubauen/implementieren
    abstract function gibGas();

    // Eine abstrakte Klasse kann fertige und abstrakte(unfertige) Methoden enthalten

}
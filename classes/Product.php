<?php

class Product {

    /*
    protected $name;
    protected $description;
    protected $price;
    */
    protected $data = [];

    function __construct($name, $description, $price) {
        $this->data['name'] = $name;
        $this->data['description'] = $description;
        $this->data['price'] = $price;
    }

    // Anlaufstelle für lesend Zugriffe auf Attribute, die nicht vorhanden sind, 
    // oder nach außen nicht sichtbar sind
    function __get($name) {
        /*
        if(property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
        */

        if(array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    // Anlaufstelle für schreibende Zugriffe auf Attribute, die nicht vorhanden sind, 
    // oder nach außen nicht sichtbar sind
    function __set($name, $value) {
        /*

        // property_exists prüft, ob eine Eigenschaft in der Klasse verfügbar ist

        if(property_exists($this, $name)) {
            $this->$name = $value;
        }
        */

        if(array_key_exists($name, $this->data)) {
            $this->data[$name] = $value;
        }
    }

    // Anlaufstelle für Methoden, die nicht vorhanden sind, 
    // oder nach außen nicht sichtbar sind
    function __call($name, $parameter) {

        // method_exists prüft, ob eine Methode in der Klasse verfügbar ist
        print_r($name); // Methodenname
        print_r($parameter); // Array mit den Parametern       
    }

    // Wird aufgerufen, wenn das Objekt vom Speicher entfernt wird
    function __destruct()
    {
        echo 'Das Objekt wird vom Speicher entfernt!';
    }
}
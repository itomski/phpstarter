<?php

class Fahrzeug {
    
    // Eigenschaften
    // Getter & Setter
    // Persiostenzlogik

    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    //...

    function save() {
        if($this->getId() > 0) {
            $this->update();
        }
        else {
            $this->insert();
        }
    }

    private function insert() {
        //...
    }

    private function update() {
        //...
    }

    static function findAll() : array {
        //...
        return []; // Array von Fahrzeug-Objekten
    }

    // self = ein Objekt von dieser Klasse (hier: Fahrzeug)
    static function findById($id): self {
        //...
        return new Fahrzeug();
    }

    // Suche nach bestimmter Eigenschaft
    //private function findByIrgendwas($irgendwas) {
        //...
    //}

    function delete() {
        //...
    }

}

// Speichern
$fahrzeug = new Fahrzeug(); // Fahrzeug mit Werten befüllen
$fahrzeug->save();

// Löschen
$fahrzeug = Fahrzeug::findById(1);
$fahrzeug->delete();

// Alle abfragen
$fahrzeuge = Fahrzeug::findAll();
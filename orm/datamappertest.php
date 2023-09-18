<?php

class Fahrzeug {
    
    // Eigenschaften
    // Getter & Setter

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
}

class FahrzeugMapper {

    // Persistenzlogik für das Fahrzeug

    function save(Fahrzeug $fahrzeug) {
        if($fahrzeug->getId() > 0) {
            $this->update($fahrzeug);
        }
        else {
            $this->insert($fahrzeug);
        }
    }

    private function insert(Fahrzeug $fahrzeug) {
        //...
    }

    private function update(Fahrzeug $fahrzeug) {
        //...
    }

    function findAll() {
        //...
    }

    function findById($id) {
        //...
    }

    // Suche nach bestimmter Eigenschaft
    //private function findByIrgendwas($irgendwas) {
        //...
    //}

    function delete(Fahrzeug $fahrzeug) {
        //...
    }
}

$mapper = new FahrzeugMapper();

// Speichern
$fahrzeug = new Fahrzeug(); // Objekt mit Werten befüllen
$mapper->save($fahrzeug);

// Abfragen
$fahrzeuge = $mapper->findAll();
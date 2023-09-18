<?php

// Kein echtes ORM, da keine Objekte gespeichert oder abgefragt werden

class FahrzeugGateway {

    // Persistenzlogik für Arrays

    function save(array $data) {
        //...
    }

    function findAll(): array {
        //...
        return [];
    }
}

$gateway = new FahrzeugGateway();
// Daten des Arrays werden in der passenden Tabelle gespeichert
$gateway->save(['marke' => 'VW', 'typ' => 'Polo', 'kennzeichen' => 'AB:CD123']);

// Daten werden als Assozatives-Array aus der passenden Tablelle abgefragt
$arr = $gateway->findAll();
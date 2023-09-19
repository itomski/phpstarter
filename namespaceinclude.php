<?php

namespace myapp; // Nur 1x pro Datei möglich

// d.h. alles in dieser Datei ist nicht mehr im globalen Namensraum sichtbar
// Der Namensraum ist eingeschränkt!

const PI = 3.14;

function sagWas() {
    echo 'Hallo!';
}

// Error: Der Name ist schon in diesem Namespace belegt
/*
function sagWas() {
    echo 'Moin!';
}
*/

class Game {
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
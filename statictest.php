<?php

class Helper {

    function __construct()
    {   
    }

    function helpNow() {
        echo 'Ich helfe jetzt';
    }
}

$helper = new Helper; // Da das Objekt keine Eigenschaften hat, macht eine Instanzierung keinen Sinn
$helper->helpNow();

// final heißt, es dürfen keine Kindklassen davon gebaut werden
final class NextHelper {

    private function __construct()
    { 
    }

    // statische Methoden gehören der Klasse
    static function helpNow() {
        echo 'Ich helfe jetzt';
    }
}

NextHelper::helpNow();
$helper2 = new NextHelper;

function machWas($helper) {
    $helper->helpNow();
}

machWas($helper);

function machWasAnderes() {
    NextHelper::helpNow();
}

machWasAnderes();
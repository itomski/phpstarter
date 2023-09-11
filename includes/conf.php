<?php

// Vor der Verwendung muss eine boolische Konstante DEBUG deklariert werden

function debug($input, ...$info) {

    if(DEBUG) {
        echo '<pre>';
        foreach($info as $i) {
            echo $i."\n";
        }
        print_r($input);
        echo '</pre>';
    }
}
<?php


function austrinken($liter) {
    if($liter <= 0) {
        echo "leer \n";
        return;
    }
    echo "lecker \n";
    austrinken(--$liter);
}

austrinken(0);
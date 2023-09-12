<?php

error_reporting(E_ALL);

// Hier können Autoload-Varianten für Klassen registriert werden
spl_autoload_register(function ($className) {
    require_once 'classes/'.$className.'.php';
}, false);

spl_autoload_register(function ($traitName) {
    require_once 'traits/'.$traitName.'.php';
}, false);
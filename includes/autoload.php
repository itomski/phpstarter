<?php

// Hier können Autoload-Varianten für Klassen registriert werden
spl_autoload_register(function ($className) {
    require_once 'classes/'.$className.'.php';
});
<?php
// MVC - Model, View, Controller

// define('FILE', 'pages.json'); // Konstante - Alte Schreibweise
const FILE = 'pages.json'; // Konstante - Neue Schreibweise

// Datenbasis - Model
/*
$pages = [];
$pages['home'] = ['title' => 'Startseite', 
                    'headline' => 'Herzlich Willkommen',
                    'content' => 'Bla bla bla bla bla'];

$pages['products'] = ['title' => 'Produkte', 
                    'headline' => 'Das sind unsere Produkte',
                    'content' => 'Bla bla...'];

$pages['contact'] = ['title' => 'Kontakt', 
                    'headline' => 'So erreichen Sie uns',
                    'content' => 'Schreiben Sie uns einfach eine E-Mail...'];

$pages['submit'] = ['title' => 'Danke', 
                    'headline' => 'Danke für Ihre Nachricht',
                    'content' => 'Wir werden uns nicht sooo schnell melden.'];

// JSON = Java Script Object Notation

file_put_contents(FILE, json_encode($pages));
*/

// Liest das JSON ein und wandelt es in ein assoziatives Array um
$pages = json_decode(file_get_contents(FILE), true);
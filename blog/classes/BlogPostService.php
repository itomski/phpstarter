<?php

// CRUD - Create Read Update Delete
class BlogPostService {

    // Instanzvariable - Sie gehört dem Objekt
    // Ist verfügbar, so lange das Objekt vorhanden ist
    private $posts = [
        ['title' => 'Team', 'headline' => 'User Team', 'content' => 'Peter, Tony und Carol...'],
        ['title' => 'Produkte', 'headline' => 'Unsere Produkte', 'content' => 'Das sind alle unsere Produkte'],
        ['title' => 'Kontakt', 'headline' => 'Schreiben Sie und', 'content' => '...'],
        ['title' => 'Home', 'headline' => 'Herzlich Willkommen', 'content' => 'Wir freuen uns über Ihner Besuch']
    ];

    // READ
    function findAll() {
        //$posts = []; // Eine Lokale Varible - gehört der Methode
        // ist nur bis zum Ende der Methode verfügbar

        // $this ist das Objekt auf dem der Methodenaufruf erfolgt
        return $this->posts; // Zugriff auf die gleichnamige Instanzvariable
    }

    function findByTitle($title) : array {
        // array_search
         foreach($this->posts as $post) {
            if($post['title'] === $title) {
                return $post;
            }
         }
         return null;
    }

    /*
    function insert() {

    }

    function update() {

    }

    function delete() {

    }
    */
}
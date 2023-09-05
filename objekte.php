<?php

class User {

    private $firstname;
    private $lastname;

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
}

$user1 = new User(); // Aus der Klasse (dem Bauplan) wird ein neues Objekt gebaut
$user1->setFirstname('Peter');
$user1->setLastname('Parker');
print_r($user1);

$user2 = new User(); // Aus der Klasse (dem Bauplan) wird ein neues Objekt gebaut
$user2->setFirstname('Bruce');
$user2->setLastname('Banner');
print_r($user2);
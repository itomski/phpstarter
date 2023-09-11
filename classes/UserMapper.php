<?php

class UserMapper { // CRUD

    private $dbh;

    private const TABLE = 'users_';

    function __construct(PDO $dbh) {
        $this->dbh = $dbh;
    }

    function save(User $user) {
        $sql = 'INSERT INTO '.self::TABLE.' (id, firstname, lastname, location) VALUES(NULL, ?, ?, ?)';
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute([$user->getFirstname(), $user->getLastname(), $user->getLocation()]);
    }

    function findAll() {
        $sql = 'SELECT * FROM '.self::TABLE;
        $stmt = $this->dbh->query($sql); // Anfrage abschicken
        // Ändert die Abfrage von Array auf User-Objects
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll(); // Ergebnisse abholen
    }

    function findById(int $id): User {
        $sql = 'SELECT * FROM '.self::TABLE.' WHERE id = '.$id;
        $stmt = $this->dbh->query($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch(); // Fragt ein Objekt ab
    }

    function delete(User $user): void {
        $sql = 'DELETE FROM '.self::TABLE.' WHERE id = '.$user->getId();
        $this->dbh->query($sql);
    }
}
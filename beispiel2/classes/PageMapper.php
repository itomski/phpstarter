<?php

class PageMapper {

    private $dbh;

    const TABLE = 'pages';

    // CRUD - Creat Read Update Delete
    // BREAD - Browse Read Edit Add Delete

    // TODO: Änderung auf ein Singleton
    function __construct(PDO $dbh)
    {
        $this->dbh = $dbh;
    }

    function insert(Page $page) {
    }

    function findAll(): array {
        $sql = 'SELECT * FROM '.self::TABLE;
        $stmt = $this->dbh->query($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        return $stmt->fetchAll();
    }

    function findOneById(int $id) {
    }

    function findOneByLabel(string $label) {
    }

    function update(Page $page) {
    }

    function delete(Page $page) {
    }
}
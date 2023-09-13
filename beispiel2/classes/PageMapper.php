<?php

class PageMapper {

    private $dbh;

    const TABLE = 'pages';

    // CRUD - Creat Read Update Delete
    // BREAD - Browse Read Edit Add Delete

    // TODO: Änderung auf ein Singleton
    function __construct()
    {
        // DbHelper ist ein Singleton d.h. bei jedem Aufruf liefert es die gleiche, beireis offene Connection
        // DbHelper::getInstance() liefert ein Objekt des Singletons (immer das gleiche)
        $this->dbh = DbHelper::getInstance()->getConnection();
    }

    function insert(Page $page) {
    }

    function findAll(): array {
        $sql = 'SELECT * FROM '.self::TABLE.' WHERE online = 1 ORDER BY navorder';
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
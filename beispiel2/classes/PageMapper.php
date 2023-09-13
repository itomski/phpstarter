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

    function save(Page $page) {
        if($page->getId() > 0) {
            $this->update($page);
        }
        else {
            $this->insert($page);
        }
    }


    private function insert(Page $page) {
    }

    function findAll(): array {
        $sql = 'SELECT * FROM '.self::TABLE.' WHERE online = 1 ORDER BY navorder';
        $stmt = $this->dbh->query($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        return $stmt->fetchAll();
    }

    function findOneById(int $id) {
    }

    function findOneByAction(string $action): Page {
        $sql = 'SELECT * FROM '.self::TABLE.' WHERE online = 1 and action = ?';
        $stmt = $this->dbh->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        $stmt->execute([$action]);
        return $stmt->fetch();
    }

    private function update(Page $page) {
    }

    function delete(Page $page) {
    }
}
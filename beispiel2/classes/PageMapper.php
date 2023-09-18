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
        $sql = 'INSERT INTO '.self::TABLE.' (id, label, action, headline, content, online, navorder, template) 
                                                            VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)';

        $stmt = $this->dbh->prepare($sql);
        $stmt->execute([$page->getLabel(),
                        $page->getAction(),
                        $page->getHeadline(),
                        $page->getContent(),
                        $page->getOnline(),
                        $page->getNavorder(),
                        $page->getTemplate()
                        ]);

        $id = $this->dbh->lastInsertId(); // Liefert die vergebene ID für das zuvor ausgeführte INSERT zurück
        if($id > 0) {
            $page->setId($id); // Die vergebene ID wird in das Objekt geschrieben
        }
    }

    function findAll($online_only = true): array {
        $sql = 'SELECT * FROM '.self::TABLE; 
        if($online_only) {
            $sql .=' WHERE online = 1';
        } 
        $sql .= ' ORDER BY navorder';
        $stmt = $this->dbh->query($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        return $stmt->fetchAll();
    }

    function findOneById(int $id): Page {
        $sql = 'SELECT * FROM '.self::TABLE.' WHERE id = ?';
        $stmt = $this->dbh->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    function findOneByAction(string $action): Page {
        $sql = 'SELECT * FROM '.self::TABLE.' WHERE online = 1 and action = ?';
        $stmt = $this->dbh->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        $stmt->execute([$action]);
        return $stmt->fetch();
    }

    private function update(Page $page) {
        $sql = 'UPDATE '.self::TABLE.' SET label = ?, action = ?, headline = ?, 
                                           content = ?, online = ?, navorder = ?, template = ?
                                           WHERE id = ?';
        $stmt = $this->dbh->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        //try {
        $stmt->execute([$page->getLabel(),
                        $page->getAction(),
                        $page->getHeadline(),
                        $page->getContent(),
                        $page->getOnline(),
                        $page->getNavorder(),
                        $page->getTemplate(),
                        $page->getId()
                        ]);
        //}
        //catch(PDOException $e) {
        //    throw new BrockenUpdateException();
        //}
        
        if($stmt->rowCount() == 0) {
            // TODO: Fehler, es wurde nichts geändert
        }
    }

    function delete(Page $page) {
        $this->deleteById($page->getId());
    }

    function deleteById(int $id) {
        // Wenn Werte von außen Strings sind sollten PreparedStatement verwendet werden
        $sql = 'DELETE FROM '.self::TABLE.' WHERE id = '.$id;
        $stmt = $this->dbh->query($sql);
        if($stmt->rowCount() > 0)
            return true;
        
        return false;
    }
}
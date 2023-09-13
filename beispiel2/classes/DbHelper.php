<?php

// Singleton (Design Pattern - Entwurfsmuster)
class DbHelper {

    static private $instance;

    private $dbh;

    private function __construct()
    {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
        ];

        try { 
            $this->dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASSWORD, $options);
        }
        catch(Exception $e) {
            die();
        }
    }

    static public function getInstance() {
        // zum arbeiten mit statischen Eigenschaften benutzt man self:: statt $this
        if(null === self::$instance) {
            self::$instance = new self; // new self instanzier sich selbt d.h. diese Klasse
        }  
        return self::$instance;  
    }

    function getConnection() {
        return $this->dbh;
    }
}
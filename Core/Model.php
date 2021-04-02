<?php

namespace Core;
use \PDO;

class Model {

    private $db_connect;
    protected $db;

    public function __construct() {
        $this->db = $this->getConexcao();
    }

    private function getConexcao() {
        try {
            $this->db_connect = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST, DB_USER, DB_PASS);
            $this->db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new PDOException($e);
        }

        return $this->db_connect;
    }

}

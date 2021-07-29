<?php

namespace application\lib;

use PDO;

class Db
{

    protected $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbName'];
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $this->db = new PDO($dsn, $config['user'], $config['pass'], $opt);
    }

    public function insert($sql, $vals)
    {
        $stmt = $this->db->prepare($sql);
        if (!empty($vals)) {
            foreach ($vals as $key => $val) {
                $stmt->bindValue(':' . $key, $val);
            }
        }
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

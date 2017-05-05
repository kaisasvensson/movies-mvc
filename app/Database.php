<?php

namespace App;

use PDO;

/*class Database extends PDO {

    public function __construct($config) {

        try {
            parent::__construct($config['db_type'] . ':host=' . $config['db_host'] . ';dbname=' . $config['db_name'], $config['db_username'], $config['db_password'], $config['charset'], $config['options']);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }*/



class Database {

    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getById($table, $id) {
        $stm-> $this->pdo->query('SELECT * FROM '.$table.' WHERE id = :id');
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function getAll($table) {
        $stm = $this->pdo->query('SELECT * FROM '.$table);
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function create($table, $data) {

        $columns = array_keys($data);

        $columnsSql = implode(',', $columns);
        ':title,:year,:director';

        $bindingSql = ':' .implode(',', $columns);
        ':title,:year,:director';

      /*  $values = array_values($data);
        $valuesSql = implode(',', $values)*/

       $sql = "INSERT INTO $table ($columnsSql) VALUES ($bindingSql)";
        $stm = $this->pdo->prepare($sql);

        foreach ($data as $key => $value) {
            $stm->bindParam(':'.$key, $value);
        }
        $status = $stm->execute();
        return ($status) ? $this->pdo->lastInsertId() : false;
    }

    public function update() {

    }

    public function delete() {

    }
}



/*
class Database extends PDO {



    public function __construct($config) {

        try {
            parent::__construct($config['db_type'] . ':host=' . $config['db_host'] . ';dbname=' . $config['db_name'], $config['db_username'], $config['db_password'], $config['charset'], $config['options']);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }
}
*/













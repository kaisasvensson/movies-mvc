<?php

namespace App;

use PDO;

class Database
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getById($table, $id)
    {
        $stm = $this->pdo->query('SELECT * FROM '.$table.' WHERE id = :id');
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function getAll($table)
    {
        $stm = $this->pdo->prepare('SELECT * FROM ' . $table);
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }


    public function create($table, $data) {
        $columns = array_keys($data);

        $columnSql = implode(',', $columns);

        $bindingSql = ':'.implode(',:', $columns);


        $sql = "INSERT INTO $table ($columnSql) VALUES ($bindingSql)";
        $stm = $this->pdo->prepare($sql);

        foreach ($data as $key => $value) {
            $stm->bindValue(':'.$key, $value);
        }
        $status = $stm->execute();

        return ($status) ? $this->pdo->lastInsertId() : false;
    }

    public function delete($table, $id)
    {
        $stm = $this->pdo->prepare('DELETE FROM ' . $table . ' WHERE `id` = :id');
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        return ($success);
    }

   /* public function update($table) {
        $stm = $this->pdo->prepare('UPDATE ' . $table . ' SET value value value = value value value');
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        return ($success);
    }*/
}







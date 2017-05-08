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
        $stm->$this->pdo->query('SELECT * FROM ' . $table . ' WHERE id = :id');
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function getAll($table)
    {
        $stm = $this->pdo->query('SELECT * FROM ' . $table);
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    /*public function create($table, $data)
    {
            $columns = array_keys($data);

            $columnsSql = implode(',', $columns);
            /*':title,:year,:director';*/

/*            $bindingSql = ':' . implode(',', $columns);*/
       /*     ':title,:year,:director';*/

            /*  $values = array_values($data);
              $valuesSql = implode(',', $values)*/

           /* $sql = "INSERT INTO $table ($columnsSql) VALUES ($bindingSql)";
            $stm = $this->pdo->prepare($sql);

            foreach ($data as $key => $value) {
                $stm->bindParam(':' . $key, $value);
            }
            $status = $stm->execute();
            return ($status) ? $this->pdo->lastInsertId() : false;
        }*/


    public function create($table, $data) {
        $columns = array_keys($data);

        $columnSql = implode(',', $columns);
        //'name, birthyear, city';
        $bindingSql = ':'.implode(',:', $columns);
        //':Anna, :1989, :Trollhättan';

        $sql = "INSERT INTO $table ($columnSql) VALUES ($bindingSql)";
        $stm = $this->pdo->prepare($sql);

        foreach ($data as $key => $value) {
            $stm->bindValue(':'.$key, $value);
        }
        $status = $stm->execute();
        //mellan ? och : är if och mellan : och ; är false.
        return ($status) ? $this->pdo->lastInsertId() : false;
    }




    public function update()
    {

    }

    public function delete() {

        if (isset($_POST['delete'])) {

            $sql = "DELETE FROM `movies` where `id` = :delete";
            $stm_delete = $pdo->prepare($sql);
            $stm_delete->execute(['delete' => $_POST['delete']]);;
        }

    }
}














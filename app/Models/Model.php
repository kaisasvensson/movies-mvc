<?php

namespace App\Models;
use App\Database;
use PDO;

abstract class Model {

    protected $id;

    private $db;

    protected $table = '';

    public  function __construct(Database $db, $modelData = []) {
        $this->db= $db;
    }

// @param integer
    public function getById($id) {
        return $this->db->getById($this->table, $id);
    }

    public function getAll() {
        return $this->db->getAll($this->table);
    }

    public function create($data) {
        return $this->db->create($this->table, $data);
    }

    public function delete($id) {
        return $this->db->delete($this->table, $id);
    }

    public function update($id, $data) {
        return $this->db->update($this->table, $id, $data);
    }

    protected function getRelated($table, $relationId, $id) {
        $pdo = $this->db->getPdo();
        $stm = $pdo->prepare("SELECT * FROM $table WHERE $relationId = :id");
        $stm->bindValue(':id', $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        /*$success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];*/

    }
}

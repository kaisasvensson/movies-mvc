<?php

namespace App\Models;
use App\Database;

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
}

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


// markus förslag
// @param integer
    public function getById($id) {
        return $this->db->getById($this->table, $id);
    }

    public function getAll() {
        return $this->db->getAll($this->table);
    }

    public function create($data) {
        return $this->db->create($this, $data);
    }
}
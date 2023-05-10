<?php

namespace App\Models;

use App\Database\Database;

class Model
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getInstance()->getConnection();
    }

    public function getOne($id)
    {
        $query = $this->database->prepare('SELECT * FROM x3d_defs WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

    public function getAll()
    {
        $query = $this->database->prepare('SELECT * FROM x3d_defs');
        $query->execute();
        return $query->fetchAll();
    }
}

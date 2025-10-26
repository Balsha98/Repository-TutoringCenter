<?php

namespace Api\Assets\Controllers;

use Source\Handlers\Core\Database\Database;

abstract class AbstractApiController
{
    private int $id;
    private array $data;
    private Database $database;

    public function getID()
    {
        return $this->id;
    }

    public function setID(int $id)
    {
        $this->id = $id;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }

    public function getDbInstance()
    {
        return $this->database;
    }

    public function setDbInstance(Database $db)
    {
        $this->database = $db;
    }

    public function get() {}

    public function post() {}

    public function put() {}

    public function delete() {}
}

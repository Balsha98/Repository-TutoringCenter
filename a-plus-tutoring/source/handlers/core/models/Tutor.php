<?php

namespace Source\Handlers\Core\Models;

use Source\Handlers\Core\Database\Database;
use Source\Handlers\Helpers\Classes\Session;

class Tutor
{
    private int $id;
    private string $type;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $dateHired;
    private string $status;
    private Database $database;

    public function __construct(Database $database, int $id = 0)
    {
        $this->database = $database;

        $this->id = $id === 0 ? (int) Session::get('account-id') : $id;

        $this->loadTutorData($this->id);
    }

    private function loadTutorData(int $id)
    {
        $result = $this->database->executeQuery(
            'SELECT * FROM tutor WHERE id = :id;', [':id' => $id]
        )->getQueryResult(true);

        if (!empty($result)) {
            $this->id = $result['id'];
            $this->type = $result['type'];
            $this->firstName = $result['first_name'];
            $this->lastName = $result['last_name'];
            $this->email = $result['email'];
            $this->dateEnrolled = $result['date_hired'];
            $this->status = $result['status'];
        }
    }

    public function getID()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getDateHired()
    {
        return $this->dateHired;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

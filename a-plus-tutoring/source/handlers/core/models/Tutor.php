<?php

namespace Source\Handlers\Core\Models;

use Source\Handlers\Core\Database\Database;
use Source\Handlers\Helpers\Classes\Session;

class Tutor
{
    private int $id;
    private string $role = 'tutor';
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $status = 'inactive';
    private string $dateHired;
    private string $image;
    private string $phone;
    private Database $database;

    public function __construct(Database $database, int $id = 0)
    {
        $this->database = $database;

        $this->id = $id === 0 ? (int) Session::get('account_id') : $id;

        $this->loadTutorData($this->id);
    }

    private function loadTutorData(int $id)
    {
        $result = $this->database->executeQuery(
            'SELECT * FROM tutors WHERE id = :id;', ['id' => $id]
        )->getQueryResult(true);

        if (!empty($result)) {
            $this->id = $result['id'];
            $this->firstName = $result['first_name'];
            $this->lastName = $result['last_name'];
            $this->email = $result['email_address'];
            $this->status = $result['status'] ?? $this->status;
            $this->dateHired = $result['date_hired'];
            $this->image = $result['image'] ?? '';
            $this->phone = $result['phone'] ?? '';
        }
    }

    public function getID()
    {
        return $this->id;
    }

    public function getRole()
    {
        return $this->role;
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

    public function getStatus()
    {
        return $this->status;
    }

    public function getDateHired()
    {
        return $this->dateHired;
    }

    public function getImage()
    {
        if (empty($this->image)) {
            $this->image = IMAGES_PATH . '/placeholder-profile.png';
        }

        return $this->image;
    }

    public function getPhone()
    {
        if (empty($this->phone)) {
            $this->phone = '(###) ###-####';
        }

        return $this->phone;
    }
}

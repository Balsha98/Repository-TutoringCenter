<?php

namespace Source\Handlers\Core\Models;

use Source\Handlers\Core\Database\Database;
use Source\Handlers\Helpers\Classes\Session;

class Student
{
    private int $id;
    private string $role = 'student';
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $grade;
    private string $major;
    private string $dateEnrolled;
    private string $phone;
    private Database $database;

    public function __construct(Database $database, int $id = 0)
    {
        $this->database = $database;

        $this->id = $id === 0 ? (int) Session::get('account_id') : $id;

        $this->loadStudentData($this->id);
    }

    private function loadStudentData(int $id)
    {
        $result = $this->database->executeQuery(
            'SELECT * FROM student WHERE id = :id;', [':id' => $id]
        )->getQueryResult(true);

        if (!empty($result)) {
            $this->id = $result['id'];
            $this->firstName = $result['first_name'];
            $this->lastName = $result['last_name'];
            $this->email = $result['email_address'];
            $this->grade = $result['grade'] ?? '';
            $this->major = $result['major'] ?? '';
            $this->dateEnrolled = $result['date_enrolled'];
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

    public function getGrade()
    {
        return $this->grade;
    }

    public function getMajor()
    {
        return $this->major;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getDateEnrolled()
    {
        return $this->dateEnrolled;
    }
}

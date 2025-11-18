<?php

namespace Api\Assets\Controllers\Profile;

use Api\Assets\Constraints\Profile\StudentConstraints;
use Api\Assets\Controllers\AbstractController;
use Source\Handlers\Helpers\Classes\Validation;

class StudentController extends AbstractController
{
    public function put()
    {
        Validation::setData($this->getData());
        Validation::setConstraints(StudentConstraints::getConstraints());

        if (!empty(Validation::validate())) {
            return Validation::getResponse();
        }

        $data = $this->getData();

        if (!empty($this->updateTutorProfile($data))) {
            return [
                'status' => 'error',
                'response' => [
                    'title' => 'Internal Error',
                    'message' => 'Unable to process your request.'
                ]
            ];
        }

        return [
            'status' => 'success',
            'response' => [
                'title' => 'Profile Update Successful',
                'message' => 'You have successfully updated your profile.'
            ],
            'route' => 'reload'
        ];
    }

    private function updateTutorProfile(array $data)
    {
        $query = '
            UPDATE student SET 
                first_name = :first_name,
                last_name = :last_name,
                email_address = :email_address,
                phone = :phone,
                grade_label = :grade_label,
                grade_value = :grade_value,
                major = :major
            WHERE
                id = :id;
        ';

        return $this->getDbInstance()->executeQuery(
            $query, [...$data, 'id' => $this->getID()]
        )->getQueryResult(true);
    }
}

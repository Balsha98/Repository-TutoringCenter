<?php

namespace Api\Assets\Controllers\Profile;

use Api\Assets\Constraints\Profile\TutorConstraints;
use Api\Assets\Controllers\AbstractController;
use Source\Handlers\Helpers\Classes\Validation;

class TutorController extends AbstractController
{
    public function put()
    {
        Validation::setData($this->getData());
        Validation::setConstraints(TutorConstraints::getConstraints());

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
            UPDATE tutor SET 
                first_name = :first_name,
                last_name = :last_name,
                email_address = :email_address,
                status = :status,
                phone = :phone 
            WHERE
                id = :id;
        ';

        return $this->getDbInstance()->executeQuery(
            $query, [...$data, 'id' => $this->getID()]
        )->getQueryResult(true);
    }
}

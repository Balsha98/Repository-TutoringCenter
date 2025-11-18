<?php

namespace Api\Assets\Controllers\Profile\Image;

use Api\Assets\Constraints\Profile\ImageConstraints;
use Api\Assets\Controllers\AbstractController;
use Source\Handlers\Helpers\Classes\Validation;

class StudentController extends AbstractController
{
    public function put()
    {
        Validation::setData($this->getData());
        Validation::setConstraints(ImageConstraints::getConstraints());

        if (!empty(Validation::validate())) {
            return Validation::getResponse();
        }

        $data = $this->getData();

        if (!empty($this->updateProfileImage($data))) {
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
                'title' => 'Image Upload Successful',
                'message' => 'You have successfully uploaded your image.'
            ],
            'route' => 'reload'
        ];
    }

    public function delete()
    {
        if (!empty($this->deleteProfileImage())) {
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
                'title' => 'Image Deletion Successful',
                'message' => 'You have successfully deleted your image.'
            ],
            'route' => 'reload'
        ];
    }

    private function updateProfileImage(array $data)
    {
        $query = '
            UPDATE student SET 
                image = :image
            WHERE
                id = :id;
        ';

        return $this->getDbInstance()->executeQuery(
            $query, [...$data, 'id' => $this->getID()]
        )->getQueryResult(true);
    }

    private function deleteProfileImage()
    {
        $query = '
            UPDATE student SET 
                image = NULL
            WHERE
                id = :id;
        ';

        return $this->getDbInstance()->executeQuery(
            $query, ['id' => $this->getID()]
        )->getQueryResult(true);
    }
}

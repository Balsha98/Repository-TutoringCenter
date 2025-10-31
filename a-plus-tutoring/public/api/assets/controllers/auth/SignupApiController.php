<?php

namespace Api\Assets\Controllers\Auth;

use Api\Assets\Constraints\Auth\SignupConstraints;
use Api\Assets\Controllers\AbstractApiController;
use Source\Handlers\Helpers\Classes\Validation;

class SignupApiController extends AbstractApiController
{
    public function post()
    {
        Validation::setData($this->getData());
        Validation::setConstraints(SignupConstraints::getConstraints());

        if (!empty(Validation::validate())) {
            return Validation::getResponse();
        }

        // TODO: Validate inputs...
    }
}

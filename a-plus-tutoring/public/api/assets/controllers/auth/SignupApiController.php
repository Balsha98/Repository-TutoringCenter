<?php

namespace Api\Assets\Controllers\Auth;

use Api\Assets\Controllers\AbstractApiController;
use Api\Assets\Validation\Auth\SignupValidation;
use Source\Handlers\Helpers\Classes\Validation;

class SignupApiController extends AbstractApiController
{
    public function post()
    {
        Validation::setData($this->getData());
        Validation::setRules(SignupValidation::getRules());

        if (!Validation::validate()) {
        }
    }
}

<?php

namespace App\LosOlivos\Validators;

class EmailValidator extends Validator {

    static $rules = array(
        'email' => 'required|email'
    );
}

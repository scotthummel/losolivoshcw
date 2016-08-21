<?php

namespace App\LosOlivos\Validators;

class Contact extends Validator {

    public static $rules = array(
        'name'     => 'required|min:5',
        'email'    => 'required|email',
        'comments' => 'required|min:10'
    );
}
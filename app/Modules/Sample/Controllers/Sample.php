<?php

namespace App\Modules\Sample\Controllers;

use CodeIgniter\Controller;

class Sample extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $result = "";
        return $result;
    }

    public function validation()
    {
        echo 'validation page';

        helper(['form']);
        echo form_open('sample/validation');
        echo form_input('sampleInput', '', 'placeholder="Enter any value"');
        echo form_input('anyInput', '', 'placeholder="For parameter showing"');
        echo form_submit('submit', 'submit');
        echo form_close();

        $Request = \Config\Services::Request();
        if ($Request->getPost()) {
            echo '<h1>is submit request</h1>';

            $Validation = \Config\Services::Validation();

            $rules = config('Validation')->sampleValidation;
            $message = [
                'sampleInput' => [
                    'myCustomRules' => 'The input value is not QWERTY'
                ],
            ];

            $Validation->setRules($rules, $message);
            $success = $Validation->withRequest($Request)->run();
            if ($success) {
                echo '<h1>form validation success</h1>';
            } else {
                echo '<h1>incorrect format</h1>';
                $error = $Validation->getErrors();
                echo '<pre>';
                echo print_r($error);
                echo '</pre>';
            }
        }
    }
}

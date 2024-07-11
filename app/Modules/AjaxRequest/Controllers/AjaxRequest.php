<?php

namespace App\Modules\AjaxRequest\Controllers;

use CodeIgniter\Controller;

class AjaxRequest extends Controller
{
    public function __construct()
    {
    }

    public function index($additionalText = '')
    {
        $result = 'just another jumper in new modules and the additional text -> ' . $additionalText;
        return $result;
    }
}

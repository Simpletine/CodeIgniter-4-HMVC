<?php

namespace App\Modules\NewModules\Controllers;

use CodeIgniter\Controller;

class NextJumple extends Controller
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

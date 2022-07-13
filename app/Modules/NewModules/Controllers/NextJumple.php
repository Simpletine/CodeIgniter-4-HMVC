<?php

namespace App\Modules\NewModules\Controllers;

use CodeIgniter\Controller;

class NextJumple extends Controller
{
    public function __construct()
    {
    }

<<<<<<< Updated upstream
    public function index($additionalText='')
    {
        $result = 'just another jumper in new modules and additional text is -> '. $additionalText;
=======
    public function index($additionalText = '')
    {
        $result = 'just another jumper in new modules and the additional text -> ' . $additionalText;
>>>>>>> Stashed changes
        return $result;
    }
}

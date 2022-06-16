<?php

namespace App\Modules\Admin\Controllers;

use App\Modules\Admin\Models\UserModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    private $userModel;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // here is declare global function
        // $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = array();
        // we include model
        $model = new UserModel();
        $model->connect();
        $data['result'] = $model->getBlog();
        echo '<pre>'; print_r($data['result']);echo '</pre>';

        
        return view('lesson/howtousemodel', $data);
    }
}

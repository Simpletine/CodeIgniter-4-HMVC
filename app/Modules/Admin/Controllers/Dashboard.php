<<<<<<< HEAD
<?php

namespace App\Modules\Admin\Controllers;

use App\Modules\Admin\Models\UserModel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
=======
<?php namespace App\Modules\Admin\Controllers;

use App\Modules\Admin\Models\UserModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
>>>>>>> parent of 1f5a75e (Upload lesson files of basecontroller)
{
    private $userModel;

    /**
     * Constructor.
     */
    public function __construct()
    {
<<<<<<< HEAD
        // here is declare global function
        // $this->userModel = new UserModel();
    }

    public function index($segmentId = 0)
    {
        $data = array();
        // we include model
        $model = new UserModel();
        $model->connect();
        $result = $model->getBlog($segmentId);
        $data['result'] = $result;

        if ($segmentId > 0) {
            $data['title'] = $result[0]->title;
            $data['description'] = $result[0]->description;
            $data['status'] = $result[0]->status;
            return view('lesson/routesegment', $data);
        }
        return view('lesson/howtousemodel', $data);
    }

    public function getResultHere($additionalText = '')
    {
        $result = 'this is the result from admin modules and the additional text -> '. $additionalText;
        return $result;
    }

    public function testFunction()
    {
        echo 'test page before load basecontroller<br/>';

        $addition=$this->firstFunction('an additional pass to basecontroller');
        echo $addition;
    }
=======
        $this->userModel = new UserModel();
    }

    public function index()
	{
		$data = [
		    'title' => 'Dashboard Page',
            'view' => 'admin/dashboard',
            'data' => $this->userModel->getUsers(),
        ];

		return view('template/layout', $data);
	}

>>>>>>> parent of 1f5a75e (Upload lesson files of basecontroller)
}

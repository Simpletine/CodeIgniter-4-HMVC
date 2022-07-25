<?php

namespace App\Modules\NewModules\Controllers;

use CodeIgniter\Controller;

class Jumping extends Controller
{
    private $userModel;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // include form helper if use codeigniter form element
        helper('form');
    }

    public function index()
    {
        // If inside current folder, is more simple as shown

        // Direct with class name
        $jumple = new NextJumple();
        // Get result inside admin modules
        $resultAdmin = new \App\Modules\Admin\Controllers\Dashboard();
        $abc = array();
        $abc['result'] = $resultAdmin->getResultHere('add with this text');
        $abc['result'] .= '<br/> an additional from next jumple' . $jumple->index('add with this text inside jumper');
        return view('samplePage', $abc);
    }

    public function submitForm($submit = false)
    {
        if (!$submit) {
            return view('submitForm');
        }


        echo 'submit validation running<br/>';
        $request = \Config\Services::request();

        $first = $request->getPost('first');
        $second = $request->getPost('second');
        $third = $request->getPost('third');

        echo $first . '<br/>';
        echo $second . '<br/>';
        echo $third . '<br/>';

        if ($first == 'qwerty') {
            echo 'first row is valid';
        }

        if ($second == 'asdfg') {
            echo 'Second row is valid';
        }

        if ($third == 'zxcvbb') {
            echo 'third row is valid';
        }
    }

    public function loadConfigPage()
    {

        $result = array();

        $config = config('sampleConfig');
        $result['first'] = $config->arrayConfig['first'];
        $result['last'] = $config->arrayConfig['last'];
        $result['array']=$config->arrayConfig;
        return view('configViewPage', $result);
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return $this->homepage('anotherpage');
    }

    public function display()
    {
        // WE LOAD THE URI LIBRARY URI not URL
        // forgot include url inside URL({your current url})
        $url = new \CodeIgniter\HTTP\URI(current_url());

        // suppose more than one, missing one
        // we declare first
        $data['all'] = $url->getsegments();
        $data['controller'] = $url->getsegment(0);
        $data['method'] = $url->getsegment(1);
        $data['firstParam'] = $url->getsegment(2);
        $data['secondParam'] = $url->getsegment(3);
        return $this->homepage('anotherpage', $data);
    }

    public function language()
    {
        // $data['first'] = lang('Mycustom.first',[],'chi');
        // $data['second'] = lang('Mycustom.second',[],'en');
        // $data['third'] = lang('Mycustom.third',[],'chi');

        
        return $this->homepage('language', $data??[]);
    }
    function login()
    {
        return view('login/login-form');
    }

    public function login_validation()
    {
        $request = \Config\Services::Request();
        $username = $request->getvar('username');
        $password = $request->getvar('password');

        if ($username == $password) {
            $result['username'] = $username;
            return view('my-account', $result);
        } else {
            $result['login'] = 'invalid login';
            return view('login/login-form', $result);
        }
    }

    public function newPage()
    {
        return view('newPage');
    }

    public function myForm()
    {
        return view('myForm');
    }

    public function submit()
    {
        $request = service('request');

        echo $request->getpost('name');
        // echo $request->getpost('age');
    }

    public function validationForm()
    {
        return view('validationForm');
    }

    public function submit_validation()
    {
        // Add validation services
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();



        $rules['name'] = ['rules' => 'required'];
        $rules['phone'] = ['rules' => 'required|integer'];
        $rules['email'] = ['rules' => 'required|valid_email'];
        $rules['bio'] = ['rules' => 'required|max_length[10]'];
        $validation->setRules($rules);
        $form_validation = $validation->withRequest($request)->run();

        if ($form_validation) {
            echo 'valid rules';
        } else {
            // $validationErrors['error'] = $validation->listErrors();
            $validationErrors['error'] = [
                'name' => $validation->getError('name'),
                'phone' => $validation->getError('phone'),
                'email' => $validation->getError('email'),
                'bio' => $validation->getError('bio'),
            ];
            return view('validationForm', $validationErrors);
        }
    }
}

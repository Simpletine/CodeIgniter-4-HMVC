<?php

namespace App\Config;

class sampleConfig extends \CodeIgniter\Config\BaseConfig
{
    public $firstConfig = 'This is first config';

    public $lastConfig = 'This is last config';

    public $arrayConfig=[
        'first'=>'This is first config in an array',
        'second'=>'This is second config in an array',
        'last'=>'This is last config in an array'
    ];
}

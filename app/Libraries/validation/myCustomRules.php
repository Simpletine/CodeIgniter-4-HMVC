<?php

namespace App\Libraries\Validation;

class myCustomRules
{
    public function myCustomRules(string $data, string $valuePassed = null, array $array)
    {
        echo '<pre>';
        echo print_r($array);
        echo '</pre>';
        
        if($array['submit']=='submit'){
            echo 'this is after submit with custom validation';
        }
        if ($data == 'QWERTY') {
            return true;
        }
        return false;
    }
}

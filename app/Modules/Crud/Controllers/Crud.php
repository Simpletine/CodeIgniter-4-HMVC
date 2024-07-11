<?php

namespace App\Modules\Crud\Controllers;

use App\Controllers\BaseController;

class Crud extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $firstValue = 'second row update first value';
        $secondValue = "second row update second value";
        $thirdValue = 'second row update third value';

        $db = db_connect();

        $data = array(
            [
                'firstColumn' => $firstValue,
                'secondColumn' => $secondValue,
                'thirdColumn' => $thirdValue,
            ],
            [
                'firstColumn' => $firstValue,
                'secondColumn' => $secondValue,
                'thirdColumn' => $thirdValue,
            ],
            [
                'firstColumn' => $firstValue,
                'secondColumn' => $secondValue,
                'thirdColumn' => $thirdValue,
            ],

            [
                'firstColumn' => $firstValue,
                'secondColumn' => $secondValue,
                'thirdColumn' => $thirdValue,
            ],
        );
        $query = $db->table('query_lesson')->select(['secondColumn', 'id'])->where(['id<>' => 5]);
        if ($query) {
            echo '<pre>';
            echo print_r($query->get()->getResult());
            echo '</pre>';
        } else {
            echo 'multi insert failed';
        }
    }
}

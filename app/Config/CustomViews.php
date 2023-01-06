<?php

namespace App\Config;

class CustomViews
{
    public $groupA = [
        'first' => 'lesson/custom-view/custom-view-first.tpl',
        'second' => 'lesson/custom-view/custom-view-second.tpl',
    ];

    public function groupAuto(array $multiple, string $output = '')
    {
        foreach ($multiple as $key => $value) {
            $output .= view($this->groupA[$value]);
        }
        return $output;
    }
}

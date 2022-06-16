<?php

namespace App\Modules\Admin\Models;

class UserModel
{

    protected $db;
    public function connect()
    {
        $this->db = db_connect();
    }

    public function getBlog()
    {
        if ($this->db) {
            echo 'connected';
            // let we pull the data from the database
            // for the sql query, we will push to github

            return $this->db->table('blog')->select('title,description')->where('status',1)->get()->getresultarray();
        } else {
            echo "isn't connect";
        }
    }
}

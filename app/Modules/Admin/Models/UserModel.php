<?php

namespace App\Modules\Admin\Models;

class UserModel
{ 

    protected $db;
    public function connect()
    {
        $this->db = db_connect();
    }
 
    public function getBlog($segmentId = 0)
    {
        if ($this->db) {

            // let we markup the builder query
            $builder = $this->db->table('blog');
            // if no select condition, it will pull all column
            // $builder->select('title');
            if ($segmentId > 0) {
                $builder->where('id', $segmentId);
            }
            return $builder->get()->getresult();
        } else {
            echo "isn't connect";
        }
    }
}
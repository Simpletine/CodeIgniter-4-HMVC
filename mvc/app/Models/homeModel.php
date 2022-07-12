<?php

namespace App\Models;

class homeModel
{
    public function index()
    {
        $database_connection = db_connect();
        return $database_connection->table('user_table')->get()->getresult();
    }
}

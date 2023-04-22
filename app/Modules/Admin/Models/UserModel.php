<?php namespace App\Modules\Admin\Models;

class UserModel
{
    public function getUsers()
    {
        return [
            UserEntity::of('U001', 'User A'),
            UserEntity::of('U002', 'User B'),
            UserEntity::of('U003', 'User C'),
        ];
    }
}
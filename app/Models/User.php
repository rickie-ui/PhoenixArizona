<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class User extends Model
{
    protected $fillable = [
        'username',
        'email',
        'phone',
        'password',
        'status',
    ];

    public function isAdmin()
    {
        return $this->type === 'admin';
    }

    public function isClient()
    {
        return $this->type === 'client';
    }

}

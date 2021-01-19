<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Network extends Model
{
    protected $fillable = [
        'user_id',
        'package_id',
        'sponsor_id',
    ];

}

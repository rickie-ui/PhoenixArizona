<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Reward extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'amount',
        'status',
    ];


}

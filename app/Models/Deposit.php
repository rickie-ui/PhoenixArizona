<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Deposit extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
    ];


}

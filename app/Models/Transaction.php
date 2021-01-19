<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'activity',
        'amount',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

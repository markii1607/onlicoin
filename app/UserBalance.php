<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBalance extends Model
{
    protected $fillable = [
        'user_id',
        'current_fund',
        'manage_fund',
        'subscription_fund',
        'oct',
        'cash'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $fillable = [
        'user_id',
        'wallet_amount',
        'wallet_address',
        'wallet_category'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

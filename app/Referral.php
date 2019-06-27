<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable = [
        'user_id',
        'referral_id',
        'referred_date'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

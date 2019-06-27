<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{
    protected $fillable = [
        'user_id',
        'verified_id',
        'status',
        'amount',
        'valid_until'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

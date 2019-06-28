<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{

	protected $fillable = [
        'user_id', 
        'verified',
        'status',
        'amount',
        'valid_until'
    ];

    public function verification_requests() {
    	return $this->hasOne('App\User', 'id', 'verified_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'amount_computed',
        'date_subscribed',
        'date_expected_end',
        'is_renewed',
        'date_renewed'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

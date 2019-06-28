<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    protected $fillable = [
        'user_id',
        'earn_date',
        'earn_total_balance',
        'earn_amount',
        'earn_remarks'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

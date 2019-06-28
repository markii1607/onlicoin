<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'return_json'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCardDetail extends Model
{
    protected $fillable = [
        'user_id',
        'acct_no',
        'acct_name',
        'exp_date',
        'cvc',
        'card_no',
        'card_type'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

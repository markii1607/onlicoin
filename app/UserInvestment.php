<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInvestment extends Model
{
    protected $fillable = [
        'user_id',
        'formula_id',
        'term_id',
        'amount',
        'amount_computed',
        'date_invested',
        'date_expected_end',
        'is_renewed',
        'date_renewed'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function formula() {
        return $this->belongsTo('App\Formula');
    }

    public function term() {
        return $this->belongsTo('App\Term');
    }
}

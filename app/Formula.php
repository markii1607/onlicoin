<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $fillable = [
        'term_id',
        'investment_amount',
        'interest_per_month',
        'direct_ref_com',
        'overriding_com'
    ];

    public function user_investments() {
        return $this->hasMany('App\UserInvestment');
    }

    public function managed_funds() {
        return $this->hasMany('App\ManagedFund');
    }

    public function term() {
        return $this->hasMany('App\Term');
    }
}

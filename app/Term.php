<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $fillable = [
        'tern_name',
        'term_months',
        'term_percent_investment'
    ];

    public function user_investments() {
        return $this->hasMany('App\UserInvestment');
    }

    public function managed_funds() {
        return $this->hasMany('App\ManagedFund');
    }

    public function formulas() {
        return $this->hasMany('App\Formula');
    }
}

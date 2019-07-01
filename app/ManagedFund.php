<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagedFund extends Model
{
    protected $fillable = [
        'user_id',
        'term_id',
        'formula_id',
        'mf_date_start',
        'mf_date_end',
        'mf_amount'
    ];

    public function term() {
        return $this->belongsTo('App\Term');
    }

    public function formula() {
        return $this->belongsTo('App\Formula');
    }
}

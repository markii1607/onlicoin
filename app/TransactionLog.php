<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionLog extends Model
{
    protected $fillable = [
        'user_id',
        'other_user_id',
        'currency',
        'transact_type',
        'transact_desc',
        'transact_array',
        'transact_amount',
        'transact_date'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'subscription_reward',
        'referral_depth',
        'payment_date',
        'payment_month',
        'e_wallet',
        'hq_timezone'
    ];
}

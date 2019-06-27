<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    protected $fillable = [
        'user_id',
        'login_date',
        'logout_date',
        'browser_used',
        'ip_address'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

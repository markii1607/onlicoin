<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'suffix_name',
        'address1',
        'address2',
        'date_of_birth',
        'place_of_birth',
        'country_code',
        'contact_no'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

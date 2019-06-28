<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\UserVerification;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'username',
        'password',
        'ip_address',
        'user_date_joined',
        'verified',
        'token',
        'referral_code',
        'is_subscribed',
        'is_active',
        'g_link',
        'fb_link',
        'ig_link',
        'tw_link',
        'LI_link'
    ];

    /**
     * The attributes that should be hidden for arrays. 
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_investments() {
        return $this->hasMany('App\UserInvestment');
    }

    public function user_card_details() {
        return $this->hasMany('App\UserCardDetail');
    }

    public function user_logs() {
        return $this->hasMany('App\UserLog');
    }

    public function user_wallets() {
        return $this->hasMany('App\UserWallet');
    }

    public function user_verifications() {
        return $this->hasMany('App\UserVerification');
    }

    public function user_balance_archives() {
        return $this->hasMany('App\UserBalanceArchive');
    }

    public function user_balances() {
        return $this->hasMany('App\UserBalance');
    }

    public function transaction_logs() {
        return $this->hasMany('App\TransactionLog');
    }

    public function subscriptions() {
        return $this->hasMany('App\Subscription');
    }

    public function referrals() {
        return $this->hasMany('App\Referral');
    }

    public function personal_information() {
        return $this->hasOne('App\PersonalInformation');
    }

    public function payments() {
        return $this->hasMany('App\Payment');
    }

    public function earnings() {
        return $this->hasMany('App\Earning');
    }

    public function getPersonalInfo() {
        return $this->personal_information;
    }

    public static function getReferralUser($refCode) {
        $referrer = User::where('referral_code', $refCode)->first();
        if ($referrer) {
            return $referrer;
        }

        return '';
    }
}

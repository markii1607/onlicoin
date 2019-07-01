<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VerifyMail;
use App\User;
use App\Referral;
use App\PersonalInformation as PI;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'contact_no' => 'string|min:11|nullable',
            'referral_code' => 'string|min:8|nullable'
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // $user = User::create([
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        //     'contactNo' => $data['contactNo'],
        //     'user_referralCode' => $data['user_referralCode'],
        //     'user_Datejoined' => date('Y-m-d H:i:s'),
        //     'referral_code' => Hash::make($data['email'].time()),
        //     'token' => $this->generateCode()
        // ]);

        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'ip_address' => \Request::ip(),
            'user_date_joined' => date('Y-m-d H:i:s'),
            'token' => $this->generateCode(),
            'referral_code' => $this->generateCode(8)
        ]);

        $pi = PI::create([
            'user_id' => $user->id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'contact_no' => $data['contact_no']
        ]);

        $returnData = [
            'id' => $user->id,
            'email' => $data['email'],
            'token' => $user->token,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name']
        ];

        if ($data['referral_code']) {
            $referrer = User::getReferralUser($data['referral_code']);
            if (!empty($referrer)) {
                Referral::create([
                    'user_id' => $user->id,
                    'referral_id' => $referrer->id,
                    'referred_date' => date('Y-m-d H:i:s')
                ]);
            } 
        }
        
        Mail::to($data['email'])->send(new VerifyMail($returnData));
        return $user;
    }
}

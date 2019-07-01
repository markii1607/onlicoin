<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\UserVerification;
use App\UserBalance;
use App\TransactionLog;

class ReferralsController extends Controller
{
    public function index () {
        return view('subscriber.referrals.index');
    }
}
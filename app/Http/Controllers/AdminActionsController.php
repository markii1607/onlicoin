<?php

namespace App\Http\Controllers;

use App\TransactionLog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminActionsController extends Controller
{

    public function clear_logs(){

        DB::table('transaction_logs')->truncate();
        return back();
    }
    public function clear_balance(){
        DB::table('user_balances')->truncate();
        DB::table('managed_funds')->truncate();
        DB::table('subscriptions')->truncate();
        return back();
    }

}

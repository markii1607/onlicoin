<?php namespace App\Traits;

use App\Formula;
use App\Http\Controllers\Verification\VerificationController;
use App\TransactionLog;
use App\User;
use App\UserBalance;
use App\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

trait TransactionTrait
{

    public function oc_log($type,$desc,$amount=0,$_user='')
    {
        if($_user==''){
            $_user = auth()->user();
        }

        $transaction = new TransactionLog();
        $transaction->user_id = $_user->id;
        $transaction->transact_type = $type;
        $transaction->transact_desc = $desc;
        $transaction->transact_amount = $amount;
        $transaction->transact_date = now();
        $transaction->save();

    }

}
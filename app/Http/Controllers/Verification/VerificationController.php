<?php

namespace App\Http\Controllers\Verification;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\UserVerification;
use App\UserBalance;
use App\TransactionLog;
use App\Http\Controllers\Controller;

class VerificationController extends Controller
{
    public function verification_create (Request $request) {
        $user_to_be_verified = User::where([ ['email', '=', $request->email], ['id', '!=', auth()->user()->id] ])->first();
        
        $response["error"] = "";

        $pending_request = UserVerification::where([ ['user_id', '=', $user_to_be_verified->id], ['verified_id', '=', auth()->user()->id], ['status', '=', 0], ['valid_until', '>', NOW()] ])->first();
        if(!$pending_request) {
            if($user_to_be_verified) {
                $transaction_log = new TransactionLog();
                $transaction_log->user_id = auth()->user()->id;
                $transaction_log->other_user_id = $user_to_be_verified->id;
                $transaction_log->currency = "";
                $transaction_log->transact_type = "verification_request_sent";
                $transaction_log->transact_desc = "Sent a verification request to " . $user_to_be_verified->first_name . " " . $user_to_be_verified->last_name;
                $transaction_log->transact_array = "";
                $transaction_log->transact_amount = 0;
                $transaction_log->transact_date = NOW();
                $transaction_log->save();

                $transaction_log = new TransactionLog();
                $transaction_log->user_id = $user_to_be_verified->id;
                $transaction_log->other_user_id = auth()->user()->id;
                $transaction_log->currency = "";
                $transaction_log->transact_type = "verification_request_received";
                $transaction_log->transact_desc = "Received a verification request from " . auth()->user()->first_name . " " . auth()->user()->last_name;
                $transaction_log->transact_array = "";
                $transaction_log->transact_amount = 0;
                $transaction_log->transact_date = NOW();
                $transaction_log->save();

                $user_verification = new UserVerification();
                $user_verification->user_id = $user_to_be_verified->id;
                $user_verification->verified_id = auth()->user()->id;
                $user_verification->valid_until = date("Y-m-d H:i:s", strtotime("+2 days"));
                $user_verification->save();

                $response["user_to_be_verified"] = $user_to_be_verified->first_name . " " . $user_to_be_verified->last_name;
            } else {
                $response["error"] = "E-mail address didn't match any account.";
            }
        } else {
            $response["error"] = "You already have a pending verification request.";
        }
        
        return $response;
    }

    public function verification_approve (Request $request) {
        $valid_verification_request = UserVerification::with('verification_requests')
            ->where([ ['id', '=', $request->id], ['user_id', '=', auth()->user()->id], ['status', '=', 0], ['valid_until', '>', NOW()] ])
            ->first();

        $response["error"] = "";

        if($valid_verification_request) {
            $verification_requester = User::where([ ['id', '=', $valid_verification_request->user_id] ])->first();

            $current_fund = UserBalance::where([ ['user_id', '=', $valid_verification_request->user_id] ])->first();

            if(!$current_fund) {
                $current_fund = (object) array('current_fund' => 0);
            }

            $transaction_log = new TransactionLog();
            $transaction_log->user_id = auth()->user()->id;
            $transaction_log->other_user_id = $verification_requester->id;
            $transaction_log->currency = "";
            $transaction_log->transact_type = "verification_request_received_approved";
            $transaction_log->transact_desc = "Approved " . $verification_requester->first_name . " " . $verification_requester->last_name . "'s verification request";
            $transaction_log->transact_array = "";
            $transaction_log->transact_amount = 0;
            $transaction_log->transact_date = NOW();
            $transaction_log->save();

            $transaction_log = new TransactionLog();
            $transaction_log->user_id = $verification_requester->id;
            $transaction_log->other_user_id = auth()->user()->id;
            $transaction_log->currency = "";
            $transaction_log->transact_type = "verification_request_sent_approved";
            $transaction_log->transact_desc = auth()->user()->first_name . " " . auth()->user()->last_name . " approved your verification request, with a current balance of " . number_format($current_fund->current_fund,"2",".",",");
            $transaction_log->transact_array = "";
            $transaction_log->transact_amount = 0;
            $transaction_log->transact_date = NOW();
            $transaction_log->save();

            $valid_verification_request = UserVerification::find($request->id);
            $valid_verification_request->status = 1;
            $valid_verification_request->amount = $current_fund->current_fund;
            $valid_verification_request->save();

            $response["verification_requests"] = UserVerification::with('verification_requests')
                ->where([ ['user_id', '=', auth()->user()->id], ['status', '=', 0], ['valid_until', '>', NOW()] ])
                ->get();
        } else {
            $response["error"] = "Invalid verification request";
        }
        
        return $response;
    }

    public function verification_decline (Request $request) {
        $valid_verification_request = UserVerification::with('verification_requests')
            ->where([ ['id', '=', $request->id], ['user_id', '=', auth()->user()->id], ['status', '=', 0], ['valid_until', '>', NOW()] ])
            ->first();

        $response["error"] = "";

        if($valid_verification_request) {
            $verification_requester = User::where([ ['id', '=', $valid_verification_request->user_id] ])->first();

            $transaction_log = new TransactionLog();
            $transaction_log->user_id = auth()->user()->id;
            $transaction_log->other_user_id = $verification_requester->id;
            $transaction_log->currency = "";
            $transaction_log->transact_type = "verification_request_received_declined";
            $transaction_log->transact_desc = "Declined " . $verification_requester->first_name . " " . $verification_requester->last_name . "'s verification request";
            $transaction_log->transact_array = "";
            $transaction_log->transact_amount = 0;
            $transaction_log->transact_date = NOW();
            $transaction_log->save();

            $transaction_log = new TransactionLog();
            $transaction_log->user_id = $verification_requester->id;
            $transaction_log->other_user_id = auth()->user()->id;
            $transaction_log->currency = "";
            $transaction_log->transact_type = "verification_request_sent_declined";
            $transaction_log->transact_desc = auth()->user()->first_name . " " . auth()->user()->last_name . " declined your verification request";
            $transaction_log->transact_array = "";
            $transaction_log->transact_amount = 0;
            $transaction_log->transact_date = NOW();
            $transaction_log->save();

            $valid_verification_request = UserVerification::find($request->id);
            $valid_verification_request->status = -1;
            $valid_verification_request->save();

            $response["verification_requests"] = UserVerification::with('verification_requests')
                ->where([ ['user_id', '=', auth()->user()->id], ['status', '=', 0], ['valid_until', '>', NOW()] ])
                ->get();
        } else {
            $response["error"] = "Invalid verification request";
        }
        
        return $response;
    }
}

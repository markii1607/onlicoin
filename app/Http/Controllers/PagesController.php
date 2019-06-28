<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserVerification;
use App\UserBalance;
use App\TransactionLog;

class PagesController extends Controller
{
    public function index () {
        $verification_requests = UserVerification::with('verification_requests')
            ->where([ ['user_id', '=', auth()->user()->id], ['status', '=', 0], ['valid_until', '>', NOW()] ])
            ->get();

        return view('admin.index', compact("verification_requests"));
    }
    
    public function verify () {
    	return view('pages.verify');
    }

    public function payment () {
    	return view('pages.payment');
    }

    public function landing () {
    	return view('pages.landing');
    }

    public function about () {
    	return view('pages.about');
    }

    public function cin_buy_oct () {
    	return view('admin.cin_buy_oct');
    }

    public function cin_manage_funds () {
    	return view('admin.cin_manage_funds');
    }

    public function cin_payment () {
    	return view('admin.cin_payment');
    }

    public function cin_remittance () {
    	return view('admin.cin_remittance');
    }

    public function cout_remittance () {
    	return view('admin.cout_remittance');
    }

    public function cout_manage_funds () {
    	return view('admin.cout_manage_funds');
    }

    public function cout_payment () {
    	return view('admin.cout_payment');
    }

    public function cout_sell_oct () {
    	return view('admin.cout_sell_oct');
    }

    public function cout_transfer () {
    	return view('admin.cout_transfer');
    }

    public function whitepaper () {
    	return view('pages.whitepaper');
    }

    public function terms () {
    	return view('pages.terms');
    }

    public function policy () {
    	return view('pages.policy');
    }

    public function userVerify(Request $request) {
        $code = auth()->user()->token;
        $verified = auth()->user()->verified;

        if (!$verified) {
            $validate = Validator::make($request->all(), [
                'code' => 'required|alpha_num|size:6|'
            ])->validate();

            if ($code == $request->code) {
                $user = User::find(auth()->user()->id);
                $user->verified = 1;
                if ($user->update()) {
                    return redirect('auth-payment')
                        ->with('toast_success', 'Verified Successfully.');
                } else {
                    return back()->with('toast_error','Something went wrong.');
                }
            } else {
                return back()
                    ->withErrors(['code' => 'The verification code cannot be found. Please try again.'])
                    ->withInput();
            }
        } else {
            return redirect('/auth-index')->with('warning', 'Your email is already verified.');
        }
    }
}

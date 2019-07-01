<?php

namespace App\Http\Controllers\Subscriber;

use App\Formula;
use App\Http\Controllers\Controller;
use App\ManagedFund;
use App\Subscription;
use App\Term;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\UserVerification;
use App\UserBalance;
use App\TransactionLog;
use App\Traits\ComputeManageFunds;

class DashboardController extends Controller
{
    use ComputeManageFunds;

    public function index () {
        $verification_requests = UserVerification::with('verification_requests')
            ->where([ ['user_id', '=', auth()->user()->id], ['status', '=', 0], ['valid_until', '>', NOW()] ])
            ->get();

        $account_balance = UserBalance::where('user_id',auth()->user()->id)->first();
        if(!$account_balance){
            $account_balance['current_fund']= 0;
            $account_balance['manage_fund']= 0;
            $account_balance['subscription_fund']= 0;
            $account_balance['oct']= 0;
            $account_balance['cash']= 0;
            $account_balance['total']= 0;
        }else{
            $account_balance['total']= $account_balance['current_fund']+$account_balance['manage_fund'];
        }

        $logs = TransactionLog::where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();

        $CUR_CONVERSION['OCT'] = 0.8;
        $CUR_CONVERSION['USD'] = 51.1;
        $CUR_CONVERSION['BTC'] = .0000000202;
        $CUR_CONVERSION['ETH'] = .000000028302;

        $user = User::with('subscription')->find(auth()->user()->id);
        $subscriber = 0;
        if($user->subscription){
            $subscriber = 1;
        }

        $user_mf = ManagedFund::where('user_id',auth()->user()->id)->first();



        return view('subscriber.dashboard', compact("verification_requests","account_balance",'logs','CUR_CONVERSION','subscriber','user_mf'));
    }

    public function trigger_manage_fund_interest(Request $request)
    {
        $user = User::with('subscription')->find(auth()->user()->id);
        if(!$user->subscription){
            return back()->with('error','Your account is not yet subscribed!!');
        }

        $user_mf = ManagedFund::where('user_id',auth()->user()->id)->first();
        $formula = Formula::find($user_mf->formula_id);
        $user_balance = UserBalance::where('user_id',auth()->user()->id)->first();
        $term = Term::find($user_mf->term_id);

        $user_balance->current_fund = floatval($user_balance->current_fund)+(floatval($user_mf->mf_amount)*($formula->interest_per_month/100));
        $user_balance->save();

        $this->oc_log('Manage Fund','Interest per Month.',(floatval($user_mf->mf_amount)*($term->term_percent_investment/100)));
        return redirect()->back();
    }

    public function try_manage_fund(Request $request)
    {

        $term = Term::find($request->term);
        if(!$term){
            return back()->with('error','Term '.$request->term.' not found!');
        }
        $amount = preg_replace('/,/','',$request->amount);

        $formula = Formula::where('term_id',$term->id)->where('investment_amount','<=',$amount)->get()->last();

        if(!$formula){
            return back()->with('error','There was an error in the Query of Formulla!');
        }
        $user = User::with('user_balances','manage_fund','subscription')->find(auth()->user()->id);
        if(!$user->subscription){
            return back()->with('error','Your account is not yet subscribed!!');
        }
        if(!$user->manage_fund){
            $user_mf = new ManagedFund();
            $user_mf->user_id = $user->id;
        }else{
            $user_mf = ManagedFund::find($user->manage_fund->id);
        }
        $user_mf->term_id = $term->id;
        $user_mf->formula_id = $formula->id;
        $user_mf->mf_date_start = now();
        $user_mf->mf_date_end = Carbon::now()->addMonths($term->term_months);
        $user_mf->mf_amount = $amount;
        if($user_mf->save()){

            $user_balance = $user->user_balances;
            if(!$user_balance){
                $user_balance = new UserBalance();
                $user_balance->user_id = $user->id;
            }else{
                $user_balance = UserBalance::find($user_balance->id);
            }

            $user_balance->manage_fund = floatval($user_balance->manage_fund)+$amount+($amount*($term->term_percent_investment/100));

            $this->oc_log('Coin In',auth()->user()->email.' has transfer to Manage Fund.',$amount);
            $user_balance->save();
        }
        return redirect()->back();



    }
    public function try_subscription(Request $request)
    {

        $user = User::with('user_balances','manage_fund')->where('id',auth()->user()->id)->first();

        $user_balance = $user->user_balances;
        $amount = preg_replace('/,/','',$request->amount);
        if(!$user_balance){
            $user_balance = new UserBalance();
            $user_balance->user_id = $user->id;
        }
        $user_balance->subscription_fund = $amount;
        if($user_balance->save()){
            $subscription = new Subscription();
            $subscription->user_id = $user->id;
            $subscription->amount = $amount;
            $subscription->amount_computed = $amount;
            $subscription->date_subscribed = now();
            if($subscription->save()){
                $user->is_subscribed = 1;
                $user->save();
                $this->oc_log('Subscription',auth()->user()->email.' has subscribed.',$amount);
                return redirect()->back()->with('success','You are now Subscribed!');

            }

        }
        return redirect()->back()->with('error','There was an error!');


    }

}
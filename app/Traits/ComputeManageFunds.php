<?php namespace App\Traits;

use App\Formula;
use App\Http\Controllers\Verification\VerificationController;
use App\ManagedFund;
use App\Term;
use App\TransactionLog;
use App\User;
use App\UserBalance;
use App\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

trait ComputeManageFunds
{
    use TransactionTrait;

    public function recalculate($DATA)
    {

        Log::info('Initializing Recalculation of Manage Funds');

        $users = User::with('user_balances','manage_fund')->role('subscriber')->get();

        $term = Term::find($DATA->term);
        if(!$term){
            return back()->with('error','Term '.$DATA->term.' not found!');
        }
        foreach($users as $user){

            $formula = Formula::where('term_id',$term->id)->where('investment_amount','<=',$amount)->get()->last();

            if(!$user->manage_fund){
                $current_mf = new ManagedFund();
                $current_mf->user_id = $user->id;
                $current_mf->term_id = $term->id;
            }

            if(!$formula){
                return back()->with('error','There was an error in the Query of Formulla!');
            }
            if(!$user->manage_fund){
                $user_mf = new ManagedFund();
                $user_mf->user_id;
            }else{
                $user_mf = ManagedFund::where('user_id',auth()->user()->id)->first();
            }
            $user_mf->term_id = $term->id;
            $user_mf->formula_id = $formula->id;
            $user_mf->mf_date_start = now();
            $user_mf->mf_date_end = Carbon::now()->addMonths($term->term_months);
            $user_mf->mf_amount = $amount;
            if($user_mf->save()){
                $user_balance->current_fund = $amount*$term->term_percent_investment;
                $user_balance->subscription_fund = $amount;
                $user_balance->save();
            }
            $amount = preg_replace('/,/','',$request->amount);
            return $user;
            $manage_fund = $user->manage_fund;
            $user_balance = $user->user_balances;
            if($user_balance){
                $current_mf_balance = $user_balance->manage_fund;
                if($manage_fund){
                    $current_mf =  $manage_fund;
                    $formula = Formula::find($current_mf->formula_id);
                    $new_current_account = $current_mf_balance * (floatval($formula->interest_per_month)/100);
                    $this->oc_log('Manage Fund','Interest Per Month',$new_current_account,$user);
                    $new_user_balance = UserBalance::find($user_balance->id);
                    $new_user_balance->current_fund = $new_user_balance->current_fund + $new_current_account;
                    $new_user_balance->save();
                }

            }

        }

        return $users;





    }

}
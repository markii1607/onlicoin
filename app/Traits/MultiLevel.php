<?php

namespace App\Traits;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

trait MultiLevel{


    public static function getLevel($id,$level = 5)
    {
        $sql = 'referrals';
        foreach(range(1,$level) as $loop){
            $sql.='.referrals';
        }
        $referrals = User::with($sql)->where('id',$id)->first();

        $array = $referrals->toArray();

        $return_array = [];
        $result = [];
        if(array_key_exists('referrals',$array)){
            $result = MultiLevel::getReferral($array['referrals'],$level);
        }
        $return_array['results'] = $result;
        $return_array['_relation'] = $array;
        return $return_array;
    }


    public static function getReferral($array,$limit = 5){

        $result=[];
        foreach($array as $referral){
            if(array_key_exists('user_id',$referral)){
                $user = User::find($referral['referral_id']);
                unset($user['created_at']);
                unset($user['updated_at']);
                $referrals=[];
                if(array_key_exists('referrals',$referral)){
                    if(count($referral['referrals'])>0){
                        $referrals = MultiLevel::getReferral($referral['referrals'],$limit-=1);
                    }
                }
                if($limit != 0){
                    $user['referrals'] =$referrals;
                }
                $result[] = $user;

            }
        }
        return $result;

    }

    public static function getDirectReferral($id){

        $referrals = User::with('direct_referrals.user')->where('id',$id)->first();
        $array = $referrals->toArray();

        $return_array = [];
        if(array_key_exists('direct_referrals',$array)){
            $return_array['count'] = count($array['direct_referrals']);
            $result = [];
            foreach($array['direct_referrals'] as $referral){
                if(array_key_exists('user',$referral)){
                    $user = $referral['user'];
                    $result[]=$user;
                }

            }
            $return_array['results'] = $result;
            $return_array['_relation'] = $array['direct_referrals'];

        }

        return $return_array;
    }


}
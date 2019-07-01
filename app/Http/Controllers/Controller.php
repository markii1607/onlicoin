<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * `generateCode` Used to generate codes for verification, etc.
     * @param integer $length
     * @return string $code
     */
    public static function generateCode($length = 6) {
        $string = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        $strlen = strlen($string);
        $code = '';
        
        for ($i = 0; $i < $length; $i++) {
            $char = $string[mt_rand(0, $strlen - 1)];
            $code .= $char;
        }

        return $code;
    }

    public function getCurrencyRates($baseCurr = 'USD') {
        $client = new Client();
        return $client->get('https://api.exchangerate-api.com/v4/latest/' . strtoupper($baseCurr));
    }

    public function getConvCurrency($amount = 1, $convCurr = 'PHP', $baseCurr = 'USD') {
        $currencies = json_decode($this->getCurrencyRates($baseCurr)->getBody());
        $exrate = $currencies->rates->$convCurr;
        return $exrate * $amount;
    }
}

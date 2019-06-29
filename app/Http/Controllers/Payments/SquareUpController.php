<?php

namespace App\Http\Controllers\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SquareUpController extends Controller
{

    public function index(){

        return view('payment_test.square');
    }

    public function paying(Request $request){

        $access_token = env(env('SQUARE_PRODUCTION').'SQUARE_ACCESS_TOKEN');
        \SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken($access_token);
        $transactions_api = new \SquareConnect\Api\TransactionsApi();
        $location_id = env(env('SQUARE_PRODUCTION').'SQUARE_LOCATION');
        $nonce = $request->nonce;

        $request_body = array (
            "card_nonce" => $nonce,
            # Monetary amounts are specified in the smallest unit of the applicable currency.
            # This amount is in cents. It's also hard-coded for $1.00, which isn't very useful.
            "amount_money" => array (
                "amount" => 100,
                "currency" => "USD"
            ),
            # Every payment you process with the SDK must have a unique idempotency key.
            # If you're unsure whether a particular payment succeeded, you can reattempt
            # it with the same idempotency key without worrying about double charging
            # the buyer.
            "idempotency_key" => uniqid()
        );

        try {
            $result = $transactions_api->charge($location_id,  $request_body);
            dump($result);
//            return json_encode($result,JSON_PRETTY_PRINT);
        } catch (\SquareConnect\ApiException $e) {
//            echo "Exception when calling TransactionApi->charge:";

            dump($e->getResponseBody());
//            var_dump($e->getResponseBody());
        }


    }
    public function get_locations(){

        $access_token = 'EAAAENSEjmm4k2-NMDaPJGEdGD_WF_m_i94p9QKTP6JiuFXVoHK6hTrDhnMWYVE6';
        # setup authorization
        \SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken($access_token);
        # create an instance of the Location API
        $locations_api = new \SquareConnect\Api\LocationsApi();

        try {
            $locations = $locations_api->listLocations();
            foreach($locations->getLocations() as $location){
                dump(json_decode($location));
            }
        } catch (\SquareConnect\ApiException $e) {
            echo "Caught exception!<br/>";
            print_r("<strong>Response body:</strong><br/>");
            echo "<pre>"; var_dump($e->getResponseBody()); echo "</pre>";
            echo "<br/><strong>Response headers:</strong><br/>";
            echo "<pre>"; var_dump($e->getResponseHeaders()); echo "</pre>";
            exit(1);
        }
    }
}

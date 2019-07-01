<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use MasterCard\Api\Crossborder\Payment;
use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Exception\ApiException;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;

class PaymentController extends Controller
{
    //

    public function payment()
    {
        $this->visa();
    }


    public function visa()
    {


        //Hash for x-pay-token
        $time = time();
        $apikey = 'TIBGI1OXD0ADB0K5YW7J21YsPpJrjmFsOub8E5oZwyNwXt8nM';
        $secret = '9{rEuy6c}/12lf$GQK@VkDb+2HbHTbO-or$gL+EG';
        $query_string = "apikey=".$apikey;
        $resource_path = 'v2/payments';
        $url = "https://sandbox.api.visa.com/cybersource/v2/payments?".$query_string;
        $body = '{"clientReferenceInformation": {"code": "TC50171_3"},"processingInformation": {"commerceIndicator": "internet"},"aggregatorInformation": {"subMerchant": {"cardAcceptorID": "1234567890","country": "US","phoneNumber": "650-432-0000","address1": "900 Metro Center","postalCode": "94404-2775","locality": "Foster City","name": "Visa Inc","administrativeArea": "CA","region": "PEN","email": "test@cybs.com"},"name": "V-Internatio","aggregatorID": "123456789"},"orderInformation": {"billTo": {"country": "US","lastName": "VDP","address2": "Address 2","address1": "201 S. Division St.","postalCode": "48104-2201","locality": "Ann Arbor","administrativeArea": "MI","firstName": "RTS","phoneNumber": "999999999","district": "MI","buildingNumber": "123","company": "Visa","email": "test@cybs.com"},"amountDetails": {"totalAmount": "102.21","currency": "USD"}},"paymentInformation": {"card": {"expirationYear": "2031","number": "5555555555554444","securityCode": "123","expirationMonth": "12","type": "002"}}}';
//        $body = '';


        $pre_hash_string = $time.$resource_path.$query_string.$body;
        $hashtoken = "xv2:".$time.":".hash_hmac('sha256', $pre_hash_string, $secret);
        $client = new Client();
        $headers = [
            'content-type' => 'application/json',
            'x-pay-token'  => $hashtoken
        ];
        $request = new \GuzzleHttp\Psr7\Request('POST', $url, $headers, $body);
        $response = $client->send($request, ['timeout' => 2]);

        return $response;

    }

    public function master_card_payment()
    {

        $consumerKey = "j3PIDUDDbD5RBflyVqGsv8Y2H5fIigWkDRoOexjzbdaab718!f30836ae4b5a4ecb81f215e326ef2cf80000000000000000";   // You should copy this from "My Keys" on your project page e.g. UTfbhDCSeNYvJpLL5l028sWL9it739PYh6LU5lZja15xcRpY!fd209e6c579dc9d7be52da93d35ae6b6c167c174690b72fa
        $keyAlias = "keyalias";   // For production: change this to the key alias you chose when you created your production key
        $keyPassword = "keystorepassword";   // For production: change this to the key alias you chose when you created your production key
        $privateKey = file_get_contents(public_path()."\\certificates\\OnliCoin_Master_Payment-sandbox.p12"); // e.g. /Users/yourname/project/sandbox.p12 | C:\Users\yourname\project\sandbox.p12
        ApiConfig::setAuthentication(new OAuthAuthentication($consumerKey, $privateKey, $keyAlias, $keyPassword));
        ApiConfig::setDebug(true); // Enable http wire logging
        ApiConfig::setSandbox(true);   // For production: use ApiConfig::setSandbox(false)

        try {
            $map = new RequestMap();
            $map->set("partner-id", "ptnr_BEeCrYJHh");
            $map->set("paymentrequest.transaction_reference", "onli_coin".time());
            $map->set("paymentrequest.sender_account_uri", "tel:+254108989");
            $map->set("paymentrequest.recipient_account_uri", "tel:+2547083636");


            /** PAYMENT AMOUNT  */
            $map->set("paymentrequest.payment_amount.amount", "100");
            $map->set("paymentrequest.payment_amount.currency", "USD");
            $map->set("paymentrequest.payment_origination_country", "USA");

            $map->set("paymentrequest.fx_type.reverse.sender_currency", "USD");
            $map->set("paymentrequest.bank_code", "NP021");
            $map->set("paymentrequest.payment_type", "P2B");

            $map->set("paymentrequest.sender.first_name", "John");
            $map->set("paymentrequest.sender.middle_name", "L");
            $map->set("paymentrequest.sender.last_name", "Doe");
            $map->set("paymentrequest.sender.nationality", "USA");
            $map->set("paymentrequest.sender.address.line1", "123MainStreet");
            $map->set("paymentrequest.sender.address.line2", "#5A");
            $map->set("paymentrequest.sender.address.city", "Arlington");
            $map->set("paymentrequest.sender.address.country_subdivision", "VA");
            $map->set("paymentrequest.sender.address.postal_code", "22207");
            $map->set("paymentrequest.sender.address.country", "USA");
            $map->set("paymentrequest.sender.date_of_birth", "1980-01-20");

            $map->set("paymentrequest.recipient.organization_name", "WU");
            $map->set("paymentrequest.recipient.nationality", "USA");
            $map->set("paymentrequest.recipient.address.line1", "123MainStreet");
            $map->set("paymentrequest.recipient.address.line2", "#5A");
            $map->set("paymentrequest.recipient.address.city", "Arlington");
            $map->set("paymentrequest.recipient.address.country_subdivision", "VA");
            $map->set("paymentrequest.recipient.address.postal_code", "22207");
            $map->set("paymentrequest.recipient.address.country", "CAN");
            $map->set("paymentrequest.recipient.email", "customer@gmail.com");

            $map->set("paymentrequest.source_of_income", "Bank");
            $map->set("paymentrequest.receiving_bank_name", "Royal Exchange");
            $map->set("paymentrequest.receiving_bank_branch_name", "Quad Cities");
            $map->set("paymentrequest.payment_file_identifier", "123456789");
            $response = Payment::create($map);

            $this->out($response, "payment.transaction_reference"); //-->0100943545680012
            $this->out($response, "payment.status"); //-->SUCCESS
            $this->out($response, "payment.id"); //-->rem_K0Nzmg4A7Z2SP1HkgvxNpfZ_waI
            $this->out($response, "payment.resource_type"); //-->payment
            $this->out($response, "payment.created"); //-->2018-11-19T03:21:07-06:00
            $this->out($response, "payment.status_timestamp"); //-->2018-11-19T03:21:09-06:00
            $this->out($response, "payment.fees_amount.currency"); //-->USD
            $this->out($response, "payment.fees_amount.amount"); //-->5.00
            $this->out($response, "payment.charged_amount.currency"); //-->USD
            $this->out($response, "payment.charged_amount.amount"); //-->105.00
            $this->out($response, "payment.credited_amount.currency"); //-->MAD
            $this->out($response, "payment.credited_amount.amount"); //-->1000.00
            $this->out($response, "payment.principal_amount.currency"); //-->USD
            $this->out($response, "payment.principal_amount.amount"); //-->100.0
            $this->out($response, "payment.sender_account_uri"); //-->tel:+254108989
            $this->out($response, "payment.recipient_account_uri"); //-->tel:+2547083636
            $this->out($response, "payment.payment_amount.currency"); //-->USD
            $this->out($response, "payment.payment_amount.amount"); //-->100
            $this->out($response, "payment.payment_origination_country"); //-->USA
            $this->out($response, "payment.fx_type.reverse.sender_currency"); //-->USD
            $this->out($response, "payment.receiving_bank_name"); //-->Royal Exchange
            $this->out($response, "payment.receiving_bank_branch_name"); //-->Quad Cities
            $this->out($response, "payment.bank_code"); //-->NP021
            $this->out($response, "payment.payment_type"); //-->P2B
            $this->out($response, "payment.source_of_income"); //-->Bank
            $this->out($response, "payment.settlement_details.currency"); //-->EUR
            $this->out($response, "payment.settlement_details.amount"); //-->23.12
            $this->out($response, "payment.cashout_code"); //-->123456
            $this->out($response, "payment.fx_rate"); //-->19.12
            $this->out($response, "payment.additional_data_list.resource_type"); //-->list
            $this->out($response, "payment.additional_data_list.item_count"); //-->2
            $this->out($response, "payment.additional_data_list.data.data_field[0].name"); //-->810
            $this->out($response, "payment.additional_data_list.data.data_field[0].value"); //-->123
            $this->out($response, "payment.additional_data_list.data.data_field[1].name"); //-->851
            $this->out($response, "payment.additional_data_list.data.data_field[1].value"); //-->456
            $this->out($response, "payment.payment_file_identifier"); //-->123456789
            // This sample shows looping through payment.additional_data_list.data.data_field
            echo "This sample shows looping through payment.additional_data_list.data.data_field\n";
            $list = $response->get("payment.additional_data_list.data.data_field");
            foreach($list as $item) {
                $this->outObj($item, "name");
                $this->outObj($item, "value");
            }

        } catch ( ApiException $e ) {
            $this->M_err("HttpStatus: ".$e->getHttpStatus());
            $this->M_err("Message: ".$e->getMessage());
            $this->M_err("ReasonCode: ".$e->getReasonCode());
            $this->M_err("Source: ".$e->getSource());
//            print_r($e);
        }


    }
    function out($response, $key) {
    echo "$key-->{$response->get($key)}<br>";
}

    function outObj($response, $key) {
        echo "$key-->{$response[$key]}<br>";
    }

    function errObj($response, $key) {
        echo "$key-->{$response->get($key)}<br>";
    }

    function M_err($message) {
        echo "$message <br>";
    }



    public function get_pesonet_authentication()
    {

//        $url =  'https://api-uat.unionbankph.com/partners/sb/convergent/v1/oauth2/authorize';
        $headers = [
            'accept' => 'application/json',
            'content-type' => 'application/x-www-form-urlencoded',
            'x-ibm-client-id' => '6d662f36-7bf0-4614-b8d2-e56c02fa84de',
            'x-ibm-client-secret' => 'O3eX8qU1sO8hX8mU7oO3cN4dW7cG7cB3yC0iQ2hB1uE0gB8cV4'
        ];

//        Partner Username: jdelacruz
//        Partner Password: Inn0v@t3

        $clientid = 'ab6690d8-19ca-4cab-80ae-759907ecf066';
        $clientid = '6d662f36-7bf0-4614-b8d2-e56c02fa84de';
        $user_name = 'jdelacruz';
        $password = 'Inn0v@t3';
        $scope = 'transfers_pesonet';

//        $body = 'grant_type=code&client_id='.$clientid.'&username='.$user_name.'&password='.$password.'&scope='.$scope;
        $body = '?response_type=&client_id='.$clientid.'&scope='.$scope;
        $body = '';


        $url =  'https://api-uat.unionbankph.com/partners/sb/convergent/v1/oauth2/authorize?client_id='.$clientid.'&response_type=json&scope='.$scope;
//        $body = 'grant_type=code&client_id='.$clientid;
        $client = new Client();
        $request = new \GuzzleHttp\Psr7\Request('GET', $url, $headers, $body);
        $response = $client->send($request, ['timeout' => 2]);

        return $response;

    }
    public function peso_net()
    {

        $body = '{
        "senderRefId": "TRANSFER-0001",
        "tranRequestDate":"2018-08-10T08:40:45.897",
        "particulars":"particulars",
        "sender": {
            "name":"Juan Dela Cruz",
          "address": {
                "line1":"241 A.DEL MUNDO ST BET. 5TH 6TH AVE GRACE",
                "line2":"PARK CALOOCAN CITY",
                "city":"Caloocan",
                "province":"142",
                "zipCode":"1900",
                "country":"204"
              }
        },
        "beneficiary": {
            "accountNumber": "107324511489",
          "name":"Juan",
          "address": {
                "line1":"241 A.DEL MUNDO ST BET. 5TH 6TH AVE GRACE",
                "line2":"PARK CALOOCAN CITY",
                "city":"Caloocan",
                "province":"142",
                "zipCode":"1900",
                "country":"204"
              }
        },
        "remittance": {
            "amount": "3000.00",
          "currency": "PHP",
          "receivingBank": "161203",
          "purpose":"5 632",
          "instructions":"instructions data",

        }
      }';
        $client = new Client();
        $headers = [
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'x-ibm-client-id' => 'ab6690d8-19ca-4cab-80ae-759907ecf066',
            'x-ibm-client-secret' => 'P1sO8tA1yP8vU2uO5cX7iX1aX0kV0aR1pP8mC3gO0mD5jH7aW7',
            'authorization'  => '',
            'x-partner-id'  => '01bbb51e-1e6c-4bd4-af9c-450957522aac'
        ];
        $url = 'https://api-uat.unionbankph.com/partners/sb/partners/v2/pesonet/transfers/single';
        $request = new \GuzzleHttp\Psr7\Request('POST', $url, $headers, json_encode($body,true));
        $response = $client->send($request, ['timeout' => 2]);

        return $response;


    }

}

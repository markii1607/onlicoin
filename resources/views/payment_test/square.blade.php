<!DOCTYPE html>
<html>
<head>
    <title>Square Payment</title>

    <link rel="stylesheet" type="text/css" href="{{url('/css/mysqpaymentform.css')}}">
</head>

<body>
<div id="form-container">
    <div id="sq-ccbox">
        <form id="nonce-form" novalidate action="square-paying" method="post">

            {{ csrf_field() }}
            <fieldset>
                <div id="sq-card-number"></div>
                <div class="third">
                    <div id="sq-expiration-date"></div>
                </div>
                <div class="third">
                    <div id="sq-cvv"></div>
                </div>
                <div class="third">
                    <div id="sq-postal-code"></div>
                </div>
            </fieldset>
            <button id="sq-creditcard" class="button-credit-card" onclick="onGetCardNonce(event)">Pay $1.00</button>
            <!--
              After a nonce is generated it will be assigned to this hidden input field.
            -->
            <input type="hidden" id="card-nonce" name="nonce">
        </form>
    </div> <!-- end #sq-ccbox -->
</div> <!-- end #form-container -->

@include('payment_test.sq_payment_js')

</body>
</html>

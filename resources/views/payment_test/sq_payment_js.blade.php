<!-- link to the SqPaymentForm library -->
<script type="text/javascript" src="https://js.squareup.com/v2/paymentform">
</script>
<script>
    // Build your sqPaymentForm here
    // Set the application ID
    const applicationId = '{{env(env('SQUARE_PRODUCTION').'SQUARE_APP_ID')}}';

    // onGetCardNonce is triggered when the "Pay $1.00" button is clicked
    function onGetCardNonce(event) {
// Don't submit the form until SqPaymentForm returns with a nonce
        event.preventDefault();
// Request a nonce from the SqPaymentForm object
        paymentForm.requestCardNonce();
    }

    // Create and initialize a payment form object
    const paymentForm = new SqPaymentForm({
// Initialize the payment form elements
        applicationId: applicationId,
        inputClass: 'sq-input',

// Customize the CSS for SqPaymentForm iframe elements
        inputStyles: [{
            fontSize: '16px',
            lineHeight: '24px',
            padding: '14px',
            placeholderColor: '#a0a0a0',
            backgroundColor: 'transparent'
        }],

// Initialize the credit card placeholders
        cardNumber: {
            elementId: 'sq-card-number',
            placeholder: 'Card Number'
        },
        cvv: {
            elementId: 'sq-cvv',
            placeholder: 'CVV'
        },
        expirationDate: {
            elementId: 'sq-expiration-date',
            placeholder: 'MM/YY'
        },
//        postalCode: false,
        postalCode: {
            elementId: 'sq-postal-code',
            placeholder: 'Postal'
        },

// SqPaymentForm callback functions
        callbacks: {
            /*
             * callback function: cardNonceResponseReceived
             * Triggered when: SqPaymentForm completes a card nonce request
             */
            paymentFormLoaded: function() {
                $('.payment_input_form').LoadingOverlay('hide')
            },
            cardNonceResponseReceived: function (errors, nonce, cardData) {
                if (errors) {
                    // Log errors from nonce generation to the browser developer console.
                    console.error('Encountered errors:');
                    errors.forEach(function (error) {
                        console.error('  ' + error.message);
                    });
                    alert('Encountered errors, check browser developer console for more details');
                    return;
                }

//                alert(`The generated nonce is:\n${nonce}`);
                // Uncomment the following block to
                // 1. assign the nonce to a form field and
                // 2. post the form to the payment processing handler

                 document.getElementById('card-nonce').value = nonce;
                 document.getElementById('nonce-form').submit();

            }
        }
    });

</script>
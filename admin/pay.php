<script>

const urlParams = new URLSearchParams(window.location.search);
const amt = urlParams.get('amt');


</script>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Directpay|OneTimePayment</title>
    </head>
    <div id="card_container"></div>
    <body>
        <script src="https://cdn.directpay.lk/dev/v1/directpayCardPayment.js?v=1"></script>
        <script>
             DirectPayCardPayment.init({
                    container: 'card_container', //<div id="card_container"></div>
                    merchantId: 'ET15433', //your merchant_id
                    amount: amt,
                    refCode: "DP12345", //unique referance code form merchant
                    currency: 'USD',
                    type: 'ONE_TIME_PAYMENT',
                    customerEmail: 'abc@mail.com',
                    customerMobile: '+94712345674',
                    description: 'Tourism',  //product or service description
                    debug: true,
                    responseCallback: responseCallback,
                    errorCallback: errorCallback,
                    logo: 'https://test.com/directpay_logo.png',
                    apiKey: 'd29f48c12c900bb33a8759c92b0463c2150c994cc261cd3f747830dbc0c3601a'
                });

             //response callback.
             function responseCallback(result) {
                    console.log("successCallback-Client", result);
                    alert(JSON.stringify(result));
                }

             //error callback
             function errorCallback(result) {
                    console.log("successCallback-Client", result);
                    alert(JSON.stringify(result));
               }
        </script>
    </body>
</html>

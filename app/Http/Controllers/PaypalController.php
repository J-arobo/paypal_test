<?php

namespace App\Http\Controllers;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function paypal(Request $request){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken =  $provider->getAccessToken();
        $response =  $provider->createOrder([
            // you have to convert the json code to php (: to =>, {} to [])
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('success'),
                "cancel_url" => route('cancel')
            ],
            "purchase_units" => [
            [
                "amount" => [
                "currency_code" => "USD",
                "value" => $request->price
            ]
        ]
    ]
        ]);
        dd($response);

    }
    public function success(){

    }
    public function cancel(){
        
    }
    
}

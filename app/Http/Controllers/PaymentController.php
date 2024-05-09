<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function index(){
        return view('index');
    }
    public function charge(Request $request)
    {
     
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $charge = Charge::create([
                'amount' => 1000, // $10, expressed in cents
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Example charge',
            ]);

            echo'You have successfully paid $10!';
        
    }
}

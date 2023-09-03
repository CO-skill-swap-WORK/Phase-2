<?php
//app/Http/Controllers/PaymentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;




class PaymentController extends Controller
{
public function initiatePayment(Request $request)
{
// Validate the request data
$request->validate([
'amount' => 'required|numeric|min:1',
// Other validation rules for card information
]);

// Set your Stripe secret key
Stripe::setApiKey(config('services.stripe.secret'));

// Create a charge using Stripe's Charge API
try {
$charge = Charge::create([
'amount' => $request->amount * 100, // Amount in cents
'currency' => 'usd', // Change to your desired currency
'source' => $request->stripeToken,
'description' => 'Payment for your service',
]);

// Process successful payment, update your database, etc.
return redirect()->back()->with('success', 'Payment successful!');
} catch (\Stripe\Exception\CardException $e) {
// Handle card payment errors (e.g., declined card)
return redirect()->back()->with('error', $e->getMessage());
} catch (\Stripe\Exception\InvalidRequestException $e) {
// Handle other Stripe API errors
return redirect()->back()->with('error', $e->getMessage());
  }
 }
}

<?php

// app/Http/Controllers/WebhookController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Webhook;

class WebhookController extends Controller
{
    public function handleStripeWebhook(Request $request)
    {
        // Verify the incoming webhook request
        $payload = $request->getContent();
        $sig_header = $request->server('HTTP_STRIPE_SIGNATURE');
        $event = null;

        try {
            $event = Webhook::constructEvent($payload, $sig_header, config('services.stripe.webhook_secret'));
        } catch (\UnexpectedValueException $e) {
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        // Handle different types of webhook events
        switch ($event->type) {
            case 'payment_intent.succeeded':
                // Update payment status or take other actions
                break;
            case 'payment_intent.failed':
                // Handle failed payment or take appropriate actions
                break;
            // Handle other event types as needed
        }

        // Return a successful response
        return response()->json(['message' => 'Webhook received']);
    }
}

<?php

namespace App\Services;

use App\Models\Key;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Mail;

class KeyDeliveryService
{
    public function sendKeyByEmail($order, $product, $key)
    {
        // Get email template
        $template = EmailTemplate::where('name', 'key_delivery')->first();
        
        if ($template) {
            $subject = str_replace('{product_name}', $product->name, $template->subject);
            $description = str_replace(
                ['{customer_name}', '{product_name}', '{product_key}'],
                [$order->user->name, $product->name, $key->key],
                $template->description
            );

            // Your existing email configuration should be used automatically
            Mail::send('admin.emails.key_delivery', [
                'description' => $description
            ], function($message) use ($order, $subject) {
                $message->to($order->user->email)
                        ->subject($subject);
            });

            return true;
        }

        return false;
    }
}

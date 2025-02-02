<?php

namespace App\Services;

use App\Models\Message;
use App\Models\ProductKey;
use Illuminate\Support\Facades\Log;

class KeyDistributionService
{
    /**
     * Distribute a key for an order item
     */
    public function distributeKey($orderItem)
    {
        try {
            // Get an unused key for this product
            $key = ProductKey::where('product_id', $orderItem->product_id)
                            ->where('is_used', false)
                            ->first();

            if (!$key) {
                // No keys available
                $this->sendNoKeyAvailableMessage($orderItem);
                
                // Log the shortage
                Log::warning("No keys available for product ID: {$orderItem->product_id}");
                return false;
            }

            // Mark key as used
            $key->is_used = true;
            $key->save();

            // Send message with the key
            $this->sendKeyMessage($orderItem, $key->key);

            return true;
        } catch (\Exception $e) {
            Log::error("Error distributing key: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Send message with the key to the buyer
     */
    private function sendKeyMessage($orderItem, $key)
    {
        $message = new Message();
        $message->user_id = $orderItem->user_id;
        $message->seller_id = $orderItem->author_id;
        $message->message = "Thank you for your purchase! Here is your product key: " . $key;
        $message->customer_read_msg = 0;
        $message->send_customer = 0; // Sent by seller/system
        $message->order_item_id = $orderItem->id;
        $message->save();
    }

    /**
     * Send message when no keys are available
     */
    private function sendNoKeyAvailableMessage($orderItem)
    {
        $message = new Message();
        $message->user_id = $orderItem->user_id;
        $message->seller_id = $orderItem->author_id;
        $message->message = "No keys are currently available for this product. The seller will provide your key shortly.";
        $message->customer_read_msg = 0;
        $message->send_customer = 0;
        $message->order_item_id = $orderItem->id;
        $message->save();
    }
}

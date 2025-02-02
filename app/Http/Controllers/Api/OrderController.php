use App\Models\EmailTemplate;
use App\Models\ProductKey;

private function sendProductKey($order)
{
    $availableKey = ProductKey::where('product_id', $order->product_id)
        ->where('is_used', false)
        ->first();

    $template = EmailTemplate::where('name', 'key_delivery')->first();
    $emailService = app(EmailService::class);

    if ($availableKey) {
        $availableKey->update(['is_used' => true]);
        
        $replacements = [
            '{customer_name}' => $order->user->name,
            '{product_name}' => $order->product->name,
            '{product_key}' => $availableKey->key
        ];

        $emailService->sendEmail(
            $order->user->email,
            strtr($template->subject, $replacements),
            strtr($template->body, $replacements)
        );

        return true;
    }

    // Send waiting notification if no key available
    $template = EmailTemplate::where('name', 'order_pending')->first();
    $emailService->sendEmail(
        $order->user->email,
        $template->subject,
        $template->body
    );

    return false;
}

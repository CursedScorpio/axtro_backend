<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductKeyEmailTemplates extends Migration
{
    public function up()
    {
        DB::table('email_templates')->insert([
            [
                'name' => 'product_key',
                'subject' => 'Your Product Key',
                'description' => 'Hello {customer_name},

Your product key for {product_name} is ready:

Key: {key}

Thank you for your purchase!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'pending_key',
                'subject' => 'Order Received - Key Pending',
                'description' => 'Hello {customer_name},

We have received your order for {product_name}. Your product key will be sent in a separate email shortly.

Thank you for your patience!',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    public function down()
    {
        DB::table('email_templates')
            ->whereIn('name', ['product_key', 'pending_key'])
            ->delete();
    }
}

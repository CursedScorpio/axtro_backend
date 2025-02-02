<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
	DB::table('email_templates')->insert([
		'name' => 'key_delivery',
		'subject' => 'Your Product Key for {product_name}',
		'description' => '<p>Dear {customer_name},</p><p>Thank you for your purchase. Here is your product key:</p><p><strong>{product_key}</strong></p><p>Best regards,<br>Your Team</p>',  // Changed from 'message' to 'description'
		'created_at' => now(),
		'updated_at' => now()
	]);
    }

    public function down()
    {
        DB::table('email_templates')->where('name', 'key_delivery')->delete();
    }
};

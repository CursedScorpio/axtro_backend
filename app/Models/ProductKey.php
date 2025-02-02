<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductKey extends Model
{
    protected $table = 'product_keys';
    
    protected $fillable = [
        'product_id',
        'variant_id',
        'key',
        'is_used'
    ];

    protected $casts = [
        'is_used' => 'boolean'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $appends = ['service_options'];

    protected $hidden = ['options'];

    public function getServiceOptionsAttribute()
    {
        return json_decode($this->options);
    }
<<<<<<< HEAD
}
=======
	public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}
}


>>>>>>> 0aeda949 (Updating backend files in main_files)

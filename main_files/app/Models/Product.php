<?php

namespace App\Models;

use Session;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $hidden = ['productlangfrontend','reviews'];

    protected $appends = ['total_sale', 'name', 'average_rating', 'total_rating'];

<<<<<<< HEAD
=======
    protected $fillable = [
        'category_id',
        'author_id',
        'regular_price',
        'offer_price',
        'status',
        'uses_keys', // Add this
        // ... any other fillable fields you have
    ];

>>>>>>> 0aeda949 (Updating backend files in main_files)
    public function category(){
        return $this->belongsTo(Category::class, 'category_id')->with('catlangfrontend');
    }

    public function author(){
        return $this->belongsTo(User::class,'author_id')->select('id','name','user_name','email','phone','image','provider','provider_avatar','created_at','user_name','kyc_status');
    }

    public function variants(){
        return $this->hasMany(ProductVariant::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class)->select('id', 'product_id', 'status', 'rating')->where('status', 1);
    }

<<<<<<< HEAD

=======
    public function keys(){
        return $this->hasMany(Key::class);
    }
>>>>>>> 0aeda949 (Updating backend files in main_files)

    public function productlangfrontend()
    {
        $front_lang = Session::get('front_lang');
        $language = Language::where('is_default', 'Yes')->first();
        if($front_lang == ''){
            $front_lang = Session::put('front_lang', $language->lang_code);
        }
        return $this->belongsTo(ProductLanguage::class, 'id', 'product_id')->where('lang_code', $front_lang);
    }

    public function productlangadmin()
    {
        $admin_lang = Session::get('admin_lang');
        return $this->belongsTo(ProductLanguage::class, 'id', 'product_id')->where('lang_code', $admin_lang);
    }

<<<<<<< HEAD


    public function getTotalSaleAttribute()
    {
        return (int) 0;

=======
    public function getTotalSaleAttribute()
    {
        return (int) 0;
>>>>>>> 0aeda949 (Updating backend files in main_files)
    }

    public function getAverageRatingAttribute()
    {
<<<<<<< HEAD

        if($this->reviews->count() > 0){

            $rating = $this->reviews->avg('rating');
            return (float) sprintf("%.1f", $rating);
        }else{

            $rating = 0.0;
            return (float) sprintf("%.1f", $rating);
        }

=======
        if($this->reviews->count() > 0){
            $rating = $this->reviews->avg('rating');
            return (float) sprintf("%.1f", $rating);
        }else{
            $rating = 0.0;
            return (float) sprintf("%.1f", $rating);
        }
>>>>>>> 0aeda949 (Updating backend files in main_files)
    }

    public function getTotalRatingAttribute()
    {
<<<<<<< HEAD

        return (int) $this->reviews->count();

    }


=======
        return (int) $this->reviews->count();
    }

>>>>>>> 0aeda949 (Updating backend files in main_files)
    public function getNameAttribute()
    {
        return $this->productlangfrontend?->name;
    }

    protected $casts = [
        'regular_price' => 'float',
        'offer_price' => 'float',
        'average_rating' => 'float',
<<<<<<< HEAD
    ];

}
=======
        'uses_keys' => 'boolean', // Add this
    ];
}
>>>>>>> 0aeda949 (Updating backend files in main_files)

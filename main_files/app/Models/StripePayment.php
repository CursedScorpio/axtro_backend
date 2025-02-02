<<<<<<< HEAD
<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;

class StripePayment extends Model
{
    protected $hidden = ['stripe_key', 'stripe_secret', 'currency_rate'];

    public function currency()
    {
        return $this->belongsTo(MultiCurrency::class, 'currency_id', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
=======
<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;

class StripePayment extends Model
{
    protected $hidden = ['stripe_key', 'stripe_secret', 'currency_rate'];

    public function currency()
    {
        return $this->belongsTo(MultiCurrency::class, 'currency_id', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)

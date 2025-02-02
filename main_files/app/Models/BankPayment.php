<<<<<<< HEAD
<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;

class BankPayment extends Model
{
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

class BankPayment extends Model
{
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)

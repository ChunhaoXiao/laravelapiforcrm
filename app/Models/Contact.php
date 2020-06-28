<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\CreatedFromNow;

class Contact extends Model
{
    use CreatedFromNow;

    protected $guarded = [];

    protected $with = [
        'customer'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    protected $appends = ['created_from_now'];
}

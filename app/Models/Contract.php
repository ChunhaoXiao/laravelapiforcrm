<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $guarded = [];

    protected $casts = [
        'archive' => 'array'
    ];

    protected $with = ['customer', 'business'];

    public function business() {
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}

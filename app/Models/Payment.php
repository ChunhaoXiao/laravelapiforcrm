<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    protected $with = [
        'customer', 'contract', 'paymethod'
    ];

    // protected $casts = [
    //     ''
    // ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id')->withDefault();
    }


    public function contract() {
        return $this->belongsTo(Contract::class, 'contract_id')->withDefault();
    }

    public function paymethod() {
        return $this->belongsTo(DataSource::class, 'pay_method');
    }
}

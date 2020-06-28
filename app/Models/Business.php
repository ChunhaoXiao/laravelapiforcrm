<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $guarded = [];

    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function level() {
        return $this->belongsTo(DataSource::class, 'level_id');
    }
}

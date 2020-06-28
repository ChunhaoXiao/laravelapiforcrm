<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function level() {
        return $this->belongsTo(DataSource::class, 'customer_level');
    }

    public function source() {
        return $this->belongsTo(DataSource::class, 'source_id');
    }

    public function industry() {
        return $this->belongsTo(DataSource::class, 'industry_id');
    }

    public function contacts() {
        return $this->hasMany(Contact::class);
    }

    public function getPicturelistAttribute() {
        return $this->pictures->map(function($item) {
            return asset('Storage/'.$item);
        });
    }

    public function calls() {
        return $this->hasMany(Call::class, 'customer_id');
    }

    public function lastCall() {
        return $this->hasOne(Call::class, 'customer_id')->latest();
    }

   

    public function getLastCallTimeAttribute() {
        return $this->lastCall? $this->lastCall->created_at->toDateString() : $this->created_at->toDateString();
    }
}

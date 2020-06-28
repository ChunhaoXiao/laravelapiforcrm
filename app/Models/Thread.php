<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = [];

    protected $dates = [
        'call_date'
    ];

    protected $with = [
        'src', 'level', 'industry'
    ];

    public function src() {
        return $this->belongsTo(DataSource::class, 'thread_from');
    }

    public function level() {
        return $this->belongsTo(DataSource::class, 'thread_level');
    }

    public function industry() {
        return $this->belongsTo(DataSource::class, 'thread_industry');
    }
    // public function customer() {
    //     return $this->belongsTo(Customer::class);
    // }
}

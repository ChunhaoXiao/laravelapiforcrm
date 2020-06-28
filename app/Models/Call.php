<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Call extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getFromNowAttribute() {
        return Date::parse($this->created_at)->diffForHumans();
    }

    public function type() {
        return $this->belongsTo(DataSource::class, 'call_method_id');
    }
}

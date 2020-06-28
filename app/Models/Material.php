<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $guarded = [];

    public function fullPath() {
        $this->path = asset('storage/'.$this->path);
    }
}

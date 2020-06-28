<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'pictures' => 'array'
    ];

    public function getCoverAttribute() {
        return !empty($this->pictures[0]) ? asset('Storage/'.$this->pictures[0]) : '';
    }

    public function businesses() {
        return $this->belongsToMany(Business::class);
    }

    public function piclist() {
        // $this->picture->foreach(function($item) {
        //     return 
        // });
    }

    public function getPicturelistAttribute() {
        return array_map(function($item) {
            return asset('Storage/'.$item);
        }, $this->pictures);
    }
}

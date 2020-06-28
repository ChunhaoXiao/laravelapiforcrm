<?php
namespace App\Models\Traits;
use Jenssegers\Date\Date;

trait CreatedFromNow {
    public function getCreatedFromNowAttribute() {
        return Date::parse($this->created_at)->diffForHumans();
    }
}
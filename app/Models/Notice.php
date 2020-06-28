<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Traits\CreatedFromNow;

class Notice extends Model
{
    use CreatedFromNow;

    protected $fillable = [
        'title',
        'content',
        'to_user',
        'from_user',
        'is_viewed',
    ];

    protected $appends = [
        'custom_title', 'reply_time', 'created_from_now'
    ];

    public function getCustomTitleAttribute() {
        
        return Str::limit($this->content, 25);

    }

    public function getReplyTimeAttribute() {
        return $this->created_at->toDateTimeString();
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'content', 
        'pictures',
        'user_id',
    ];

    protected $casts = [
        'pictures' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reply() {
        return $this->hasOne(FeedbackReply::class, 'feedback_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FeedbackReply extends Model
{
    protected $guarded = [];

    protected $appends = [
        'title'
    ];
    public function feedback() {
        return $this->belongsTo(Feedback::class, 'feedback_id');
    }

    public function notice() {
        return $this->hasOne(Notice::class, 'reply_id');
    }

    public function getNoticeContentAttribute() {
        $str = '回复你的反馈:\"'.Str::limit($this->feedback->content, 25).'\"';
        $str .= "\r\n回复内容：".$this->content;
        return $str;
    }
}

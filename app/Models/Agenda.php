<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    const STATUS = [
        'NOT_BEGIN' => '未开始',
        'COMING' => '即将开始',
        'GOING' => '进行中',
        'DUE' => '已过期',
    ];

    protected $appends = [
        'time', 
        'agenda_start',
        'agenda_end',
    ];

    protected $guarded = [];

    public function scopeDay($query, $date) {
        return $query->whereDate('start_time', $date);
    }

    protected $dates = [
        'start_time', 'end_time',
    ];

    public function getGroupsAttribute()
    {
        return strpos($this->start_time->format('g:i A'),"AM")?'AM' : 'PM';
    }

    public function getTimeAttribute() 
    {
        return $this->start_time->format('g:i A');
    }

    public function getAgendaStartAttribute() {
        return $this->start_time->format('m-d H:i');
    }

    public function getAgendaEndAttribute() {
        return $this->end_time->format('m-d H:i');
    }

    public function type() {
        return $this->belongsTo(DataSource::class, 'theme');
    }

    public function getStatusAttribute() {
        $diff = now()->diffInHours($this->start_time, false);
        if($diff == 0) {
            return '进行中';
        }
        return $diff > 0 ? '未开始' : '已过期';
    }

    public function scopeComing($query) {
        return $query->where('start_time', '>', now())->orderBy("start_time")->limit(5);
    }
}

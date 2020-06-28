<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSource extends Model
{
    protected $guarded = [];

    const TYPES = [
        'agenda' => '日程类型',
        'business_level' => '商机等级',
        'call_method' => '跟进方式',
        'pay_method' => '回款方式',
        'remind' => '提醒时间',
        'thread_from' => '线索来源',
        'thread_industry' => '客户行业',
        'thread_level' => '线索等级',

    ];
    public function scopeSrc($query, $type) {
        return $query->where('data_model', $type);
    }
}

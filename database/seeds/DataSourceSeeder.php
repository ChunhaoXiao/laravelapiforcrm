<?php

use Illuminate\Database\Seeder;
use App\Models\DataSource;
use PhpMyAdmin\Server\Status\Data;

class DataSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => '促销', 'data_model' => 'thread_from'],
            ['name' => '搜索引擎', 'data_model' => 'thread_from'],
            ['name' => '广告', 'data_model' => 'thread_from'],
            ['name' => '转介绍', 'data_model' => 'thread_from'],
            ['name' => '线上注册', 'data_model' => 'thread_from'],
            ['name' => '线上购价', 'data_model' => 'thread_from'],
            ['name' => '预约上门', 'data_model' => 'thread_from'],
            ['name' => '陌拜', 'data_model' => 'thread_from'],
            ['name' => '电话咨询', 'data_model' => 'thread_from'],
            ['name' => '邮件咨询', 'data_model' => 'thread_from'],
            ['name' => '重要客户', 'data_model' => 'thread_level'],
            ['name' => '普通客户', 'data_model' => 'thread_level'],
            ['name' => '非优先客户', 'data_model' => 'thread_level'],
            ['name' => 'IT', 'data_model' => 'thread_industry'],
            ['name' => '金融业', 'data_model' => 'thread_industry'],
            ['name' => '房地产', 'data_model' => 'thread_industry'],
            ['name' => '商业服务', 'data_model' => 'thread_industry'],
            ['name' => '运输/物流', 'data_model' => 'thread_industry'],
            ['name' => '生产', 'data_model' => 'thread_industry'],
            ['name' => '政府', 'data_model' => 'thread_industry'],
            ['name' => '文化传媒', 'data_model' => 'thread_industry'],

            ['name' => '一级商机', 'data_model' => 'business_level'],
            ['name' => '二级商机', 'data_model' => 'business_level'],
            ['name' => '三级商机', 'data_model' => 'business_level'],
            ['name' => '八级商机', 'data_model' => 'business_level'],

            ['name' => '现金',     'data_model' => 'pay_method'],
            ['name' => '银行转账', 'data_model' => 'pay_method'],
            ['name' => '微信转账', 'data_model' => 'pay_method'],

            ['name' => '电话跟进', 'data_model' => 'call_method'],
            ['name' => '邮件跟进', 'data_model' => 'call_method'],
            ['name' => '微信跟进', 'data_model' => 'call_method'],

            ['name' => '会议', 'data_model' => 'agenda'],
            ['name' => '拜访客户', 'data_model' => 'agenda'],
            ['name' => '其它', 'data_model' => 'agenda'],

            ['name' => '不提醒', 'data_model' => 'remind'],
            ['name' => '准时', 'data_model' => 'remind'],
            ['name' => '提前10分钟', 'data_model' => 'remind'],
            ['name' => '提前30分钟', 'data_model' => 'remind'],
            ['name' => '提前1小时', 'data_model' => 'remind'],
            ['name' => '提前2小时', 'data_model' => 'remind'],
            ['name' => '提前6小时', 'data_model' => 'remind'],
            ['name' => '提前一天', 'data_model' => 'remind'],
        ];

        foreach($datas as $v) {
            if(DataSource::where([['name', $v['name']], ['data_model', $v['data_model']]])->doesntExist()) {
                DataSource::create($v);
            }
        }
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('number')->comment('合同编号');
            $table->string('name')->comment('合同名称');
            $table->integer('customer_id')->nullable()->comment('客户名称');
            $table->integer('business_id')->nullable()->comment('商机名称');
            $table->decimal('total_amount')->default(0)->comment('合同金额');
            $table->date('pay_date')->nullable()->comment('回款日期');
            $table->date('start_date')->nullable()->comment('合同开始日期');
            $table->date('end_date')->nullable()->comment('合同结束日期');
            $table->string('customer_sign_name')->nullable()->comment('客户签约人');
            $table->string('company_sign_name')->nullable()->comment('公司签约人');
            $table->text('archive')->nullable()->comment('合同存档');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}

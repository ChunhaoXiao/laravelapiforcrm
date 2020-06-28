<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('联系人名称');
            $table->integer('customer_id')->comment('所属客户');
            $table->string('note')->nullable()->comment('备注');
            $table->string('mobile')->nullable()->comment('联系人的手机号');
            $table->string('phone')->nullable()->comment('联系人的电话号');
            $table->string('email')->nullable()->comment('联系人的邮箱');
            $table->string('duties')->nullable()->comment('联系人的职务');
            $table->tinyInteger('is_key_person')->default(0)->comment('是否是关键决策人');
            $table->string('address')->nullable()->comment('联系人的地址');
            $table->date('next_contact_date')->nullable()->comment('下次联系时间');
            $table->integer('user_id')->nullable()->comment('联系人所属系统用户');
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
        Schema::dropIfExists('contacts');
    }
}

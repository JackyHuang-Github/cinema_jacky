<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->unique(); // 會員姓名
            $table->string('nickname', 50)->nullable(); // 暱稱
            $table->enum('gender', ['男', '女']); // 性別
            $table->date('birthday')->nullable(); // 生日
            $table->string('tel', 20)->nullable(); // 電話
            $table->string('mobile', 20)->nullable(); // 手機號碼
            $table->string('email', 100)->nullable()->unique(); // 郵件
            $table->string('address', 100)->nullable(); // 地址
            $table->string('portrait')->nullable(); // 照片
            $table->boolean('enabled')->default(true); // 是否啟用
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
        Schema::dropIfExists('members');
    }
};

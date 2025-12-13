<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 名稱
            $table->string('subtitle'); // 副標題
            $table->string('image')->nullable(); // 圖片路徑
            $table->string('description', 105)->nullable(); // 描述文字（中文不超過35個字，約105字符）
            $table->boolean('is_active')->default(true); // 是否上架
            $table->integer('sort_order')->default(0); // 排序順序
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};

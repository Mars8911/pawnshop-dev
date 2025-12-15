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
        Schema::create('timeline_items', function (Blueprint $table) {
            $table->id();
            $table->string('date')->comment('日期（格式：YYYY/MM）');
            $table->string('text', 30)->comment('文字內容（不超過30個字元）');
            $table->integer('sort_order')->default(0)->comment('排序順序');
            $table->boolean('is_active')->default(true)->comment('是否上架');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timeline_items');
    }
};

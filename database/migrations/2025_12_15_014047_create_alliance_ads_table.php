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
        Schema::create('alliance_ads', function (Blueprint $table) {
            $table->id();
            $table->string('image')->comment('圖片路徑');
            $table->string('link')->comment('連結網址');
            $table->string('alt')->nullable()->comment('圖片替代文字');
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
        Schema::dropIfExists('alliance_ads');
    }
};

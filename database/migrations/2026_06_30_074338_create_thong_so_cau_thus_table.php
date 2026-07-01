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
        Schema::create('thong_so_cau_thus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('van_dau_id')->constrained('chi_tiet_van_daus')->onDelete('cascade');
            $table->foreignId('tuyen_thu_id')->constrained('tuyen_thus')->onDelete('cascade');
            $table->integer('kills')->default(0);
            $table->integer('deaths')->default(0);
            $table->integer('assists')->default(0);
            $table->integer('vang_kiem_duoc')->default(0);
            $table->integer('sat_thuong')->default(0);
            $table->boolean('is_mvp')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thong_so_cau_thus');
    }
};

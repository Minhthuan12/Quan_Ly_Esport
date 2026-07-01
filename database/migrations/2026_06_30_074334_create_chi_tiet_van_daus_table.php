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
        Schema::create('chi_tiet_van_daus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tran_dau_id')->constrained('tran_daus')->onDelete('cascade');
            $table->integer('so_thu_tu_van');
            $table->integer('thoi_gian_dau'); // in seconds
            $table->foreignId('doi_thang_id')->nullable()->constrained('doi_tuyens')->onDelete('set null');
            $table->string('video_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_van_daus');
    }
};

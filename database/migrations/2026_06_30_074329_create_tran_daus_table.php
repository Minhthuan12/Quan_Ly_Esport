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
        Schema::create('tran_daus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giai_dau_id')->constrained('giai_daus')->onDelete('cascade');
            $table->foreignId('doi_1_id')->constrained('doi_tuyens')->onDelete('cascade');
            $table->foreignId('doi_2_id')->constrained('doi_tuyens')->onDelete('cascade');
            $table->dateTime('thoi_gian');
            $table->string('ti_so')->default('0 - 0');
            $table->string('trang_thai'); // sap_dau, dang_dau, da_dau
            $table->foreignId('doi_thang_id')->nullable()->constrained('doi_tuyens')->onDelete('set null');
            $table->string('dia_diem')->default('Online');
            $table->string('vong_dau')->default('Vòng bảng');
            $table->string('series')->default('BO3'); // BO1, BO3, BO5
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tran_daus');
    }
};

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
        Schema::create('doi_tuyens', function (Blueprint $table) {
            $table->id();
            $table->string('ten_doi');
            $table->string('ten_viet_tat')->nullable();
            $table->text('logo')->nullable();
            $table->text('anh_bia')->nullable();
            $table->text('mo_ta')->nullable();
            $table->integer('diem_so')->default(0);
            $table->foreignId('nguoi_quan_ly_id')->nullable()->constrained('nguoi_dungs')->onDelete('set null');
            $table->string('email')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doi_tuyens');
    }
};

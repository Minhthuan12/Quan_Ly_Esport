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
        Schema::create('nguoi_dungs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dang_nhap')->unique();
            $table->string('mat_khau');
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->text('avatar')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->foreignId('role_id')->nullable()->constrained('chuc_vus')->onDelete('set null');
            $table->string('trang_thai')->default('Hoạt động');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguoi_dungs');
    }
};

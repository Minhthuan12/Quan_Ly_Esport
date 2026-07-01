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
        Schema::create('khieu_nai_to_caos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nguoi_khieu_nai_id')->constrained('nguoi_dungs')->onDelete('cascade');
            $table->string('tieu_de');
            $table->text('noi_dung');
            $table->string('bang_chung')->nullable();
            $table->string('trang_thai_xu_ly')->default('dang_cho'); // dang_cho, dang_xu_ly, da_xu_ly
            $table->foreignId('nguoi_xu_ly_id')->nullable()->constrained('nguoi_dungs')->onDelete('set null');
            $table->text('ket_qua')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khieu_nai_to_caos');
    }
};

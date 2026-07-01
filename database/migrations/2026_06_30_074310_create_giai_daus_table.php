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
        Schema::create('giai_daus', function (Blueprint $table) {
            $table->id();
            $table->string('ten_giai');
            $table->foreignId('game_id')->constrained('games')->onDelete('cascade');
            $table->string('trang_thai'); // dang_dien_ra, sap_dien_ra, da_ket_thuc
            $table->text('anh_bia')->nullable();
            $table->date('ngay_bat_dau');
            $table->date('ngay_ket_thuc');
            $table->string('giai_thuong');
            $table->integer('so_doi_tham_gia')->default(0);
            $table->integer('so_doi_toi_da')->default(8);
            $table->text('the_thuc')->nullable();
            $table->text('luat_le')->nullable();
            $table->text('mo_ta')->nullable();
            $table->string('hinh_thuc')->default('Online');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giai_daus');
    }
};

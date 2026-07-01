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
        Schema::create('bai_viet_tin_tucs', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->string('slug');
            $table->text('anh_bia')->nullable();
            $table->text('noi_dung')->nullable();
            $table->date('ngay_dang');
            $table->foreignId('nguoi_dang_id')->nullable()->constrained('nguoi_dungs')->onDelete('set null');
            $table->text('tom_tat')->nullable();
            $table->integer('luot_xem')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bai_viet_tin_tucs');
    }
};

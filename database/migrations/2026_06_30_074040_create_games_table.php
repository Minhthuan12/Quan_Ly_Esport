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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('ten_game');
            $table->string('ten_tieng_anh')->nullable();
            $table->string('the_loai');
            $table->text('logo')->nullable();
            $table->text('anh_bia')->nullable();
            $table->text('mo_ta')->nullable();
            $table->string('trang_thai')->default('Hoạt động');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

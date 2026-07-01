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
        Schema::create('nha_tai_tro_giai_daus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giai_dau_id')->constrained('giai_daus')->onDelete('cascade');
            $table->string('ten_nha_tai_tro');
            $table->text('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nha_tai_tro_giai_daus');
    }
};

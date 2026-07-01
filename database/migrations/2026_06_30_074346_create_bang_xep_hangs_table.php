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
        Schema::create('bang_xep_hangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giai_dau_id')->constrained('giai_daus')->onDelete('cascade');
            $table->foreignId('doi_tuyen_id')->constrained('doi_tuyens')->onDelete('cascade');
            $table->integer('hang')->default(0);
            $table->integer('thang')->default(0);
            $table->integer('thua')->default(0);
            $table->string('he_so')->default('+0');
            $table->integer('diem')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bang_xep_hangs');
    }
};

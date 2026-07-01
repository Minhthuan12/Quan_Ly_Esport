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
        Schema::create('giai_dau_tuyens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giai_dau_id')->constrained('giai_daus')->onDelete('cascade');
            $table->foreignId('doi_tuyen_id')->constrained('doi_tuyens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giai_dau_tuyens');
    }
};

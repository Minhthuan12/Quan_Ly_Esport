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
        Schema::create('ket_qua_tran_daus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tran_dau_id')->constrained('tran_daus')->onDelete('cascade');
            $table->foreignId('doi_thang_id')->nullable()->constrained('doi_tuyens')->onDelete('set null');
            $table->integer('ti_so_doi_1');
            $table->integer('ti_so_doi_2');
            $table->text('mo_ta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ket_qua_tran_daus');
    }
};

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
        Schema::create('tuyen_thus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doi_tuyen_id')->nullable()->constrained('doi_tuyens')->onDelete('set null');
            $table->string('ho_ten');
            $table->string('nickname');
            $table->string('vi_tri_thi_dau');
            $table->text('avatar')->nullable();
            $table->integer('so_ao')->nullable();
            $table->string('quoc_tich')->default('Việt Nam');
            $table->date('ngay_sinh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuyen_thus');
    }
};

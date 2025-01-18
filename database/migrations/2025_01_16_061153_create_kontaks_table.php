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
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ig');
            $table->string('wa');
            $table->string('email');
            $table->string('alamat');
            $table->string('tahun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontaks');
    }
};

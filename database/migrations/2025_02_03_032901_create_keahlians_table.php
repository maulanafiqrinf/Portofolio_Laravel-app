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
        Schema::create('keahlians', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('icon')->nullable();
            $table->string('kd_status',5);
            $table->string('kd_kategori_keahlian',5);
            $table->timestamps();

            $table->foreign('kd_status')->references('kd_status')->on('statuses')->onDelete('cascade');
            $table->foreign('kd_kategori_keahlian')->references('kd_kategori_keahlian')->on('kategori_keahlians')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keahlians');
    }
};

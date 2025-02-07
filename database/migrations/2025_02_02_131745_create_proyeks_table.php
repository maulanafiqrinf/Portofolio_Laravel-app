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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->nullable();
            $table->string('position',100)->nullable();
            $table->string('pihak',100)->nullable();
            $table->string('technology',100)->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('jobdesk')->nullable();
            $table->text('image')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('link')->nullable();
            $table->date('start_date')->nullable();
            $table->date('completion_date')->nullable();
            $table->string('kd_status',5);
            $table->string('kd_kategori',5);
            $table->timestamps();

            $table->foreign('kd_status')->references('kd_status')->on('statuses')->onDelete('cascade');
            $table->foreign('kd_kategori')->references('kd_kategori')->on('kategoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};

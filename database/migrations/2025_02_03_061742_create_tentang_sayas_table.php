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
        Schema::create('tentang_sayas', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->nullable();
            $table->string('email',100)->nullable();
            $table->string('profesi',100)->nullable();
            $table->text('detail')->nullable();
            $table->text('lokasi')->nullable();
            $table->string('hp',13)->nullable();
            $table->text('foto')->nullable();
            $table->text('cv')->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('linkedln',100)->nullable();
            $table->string('github',100)->nullable();
            $table->text('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentang_sayas');
    }
};

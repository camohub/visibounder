<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('path'); // Uloží cestu k súboru
            $table->string('thumb_path'); // Náhľad súboru (voliteľné)
            $table->string('name'); // Názov súboru
            $table->timestamps(); // Vytvorí created_at a updated_at
            $table->softDeletes(); // Umožní soft delete (deleted_at)
        });
    }

    /**
     * Migration rollback
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};

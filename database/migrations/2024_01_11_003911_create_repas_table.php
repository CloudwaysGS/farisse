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
        Schema::create('repas', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('categorie')->nullable(); // Ajout de la colonne categorie
            $table->text('description')->nullable();
            $table->decimal('prix', 8, 2)->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repas');
    }
};
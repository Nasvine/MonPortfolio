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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('poste');
            $table->string('entreprise');
            $table->enum('statut', ['Employé', 'Stage Professionnel', 'CDD', 'CDI', 'Stage Académique'])->default('Stage Professionnel');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};

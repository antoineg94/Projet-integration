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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->float('matricule', 20);
            $table->string('courriel', 255);
            $table->string('nom', 255);
            $table->string('prenom', 255);
            $table->string('position', 255)->nullable();
            $table->string('superieur_id', 255)->default('N/A');
            $table->string('superviseur', 255)->default('non');
            $table->string('admin', 255)->default('non');
            $table->foreignId('departement_id')->constrained();
            $table->string('etat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};

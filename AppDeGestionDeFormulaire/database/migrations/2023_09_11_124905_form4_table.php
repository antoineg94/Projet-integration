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
        Schema::create('Form4s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeform_id')->constrained();          
            $table->float('no_unite');
            $table->string('departement', 255);
            $table->string('nom_complet_employe', 255);
            $table->string('nom_complet_superieur', 255);
            $table->string('vehicule_citoyen', 255);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form4s');
    }
};

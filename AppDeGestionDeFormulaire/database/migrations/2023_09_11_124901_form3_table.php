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
        Schema::create('Form3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeform_id')->constrained();   
            $table->string('lieu', 255)->nullable();
            $table->string('epi', 255)->nullable();
            $table->string('tenue', 255)->nullable();
            $table->string('comportement', 255)->nullable();
            $table->string('signalisation', 255)->nullable();
            $table->string('fiche_signal', 255)->nullable();
            $table->string('travaux', 255)->nullable();
            $table->string('espace_clos', 255)->nullable();
            $table->string('methode_travail', 255)->nullable();
            $table->string('autre', 255)->nullable();
            $table->string('respect_distance', 255)->nullable();
            $table->string('port_epi', 255)->nullable();
            $table->string('respect_proced', 255)->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form3s');
    }
};

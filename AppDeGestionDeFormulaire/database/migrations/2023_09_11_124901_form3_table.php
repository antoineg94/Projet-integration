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
            $table->string('lieu', 255);
            $table->date('date_incident');
            $table->time('heure_incident');
            $table->string('epi', 255);
            $table->string('tenue', 255);
            $table->string('comportement', 255);
            $table->string('signalisation', 255);
            $table->string('fiche_signal', 255);
            $table->string('travaux', 255);
            $table->string('espace_clos', 255);
            $table->string('methode_travail', 255);
            $table->string('autre', 255);
            $table->string('respect_distance', 255);
            $table->string('port_epi', 255);
            $table->string('respect_proced', 255);
            $table->string('description', 255)->nullable();

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

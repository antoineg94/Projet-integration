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
        Schema::create('Form1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeform_id')->constrained();
            $table->string('fonction_avant', 255);            
            $table->date('date_incident');
            $table->time('heure_incident');
            $table->string('lieu', 255);
            $table->string('secteur', 255);

            $table->string('nom_secouriste', 255)->nullable();

            $table->string('nature_blessure', 1023);
            $table->string('description_blessure', 1023);
            $table->string('type_violence', 255);
            $table->string('description_tache', 1023);
            $table->string('type_absence', 255);
            $table->string('temoin', 255)->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form1s');
    }
};

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
        Schema::create('Form1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeform_id')->constrained();            
            $table->date('date_incident');
            $table->time('heure_incident');
            $table->string('lieu', 255)->nullable();
            $table->string('secteur', 255)->nullable();

            $table->string('premiers_soins', 255)->nullable();
            $table->string('nom_secouriste', 255)->nullable();

            $table->string('nature_blessure', 255)->nullable();
            $table->string('description_blessure', 255)->nullable();

            $table->string('type_violence', 255)->nullable();
            $table->string('type_absence', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form1');
    }
};

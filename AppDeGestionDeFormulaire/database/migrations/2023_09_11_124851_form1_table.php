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
            $table->string('temoin', 255)->nullable();
            $table->string('blessure', 255)->nullable();
            $table->string('type_violence', 255)->nullable();
            $table->string('type_absence', 255)->nullable();
            $table->date('date_formulaire')->nullable();
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
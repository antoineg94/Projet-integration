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
        Schema::create('Form2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeform_id')->constrained();
            $table->string('fonction_avant', 255);             
            $table->string('secteur', 255);
            $table->date('date_observ');
            $table->time('heure_observ');
            $table->string('lieu', 255);
            $table->string('description', 255);
            $table->string('proposition', 255);
            $table->string('temoin', 255)->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form2s');
    }
};

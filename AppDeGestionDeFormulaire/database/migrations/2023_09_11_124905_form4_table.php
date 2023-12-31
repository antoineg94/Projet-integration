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
            $table->date('date');
            $table->time('heure');   
            $table->string('no_unite', 255);
            $table->string('departement', 255);
            $table->string('permis_conduire', 255)->nullable();
            $table->string('vehicule_citoyen', 3)->nullable();

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

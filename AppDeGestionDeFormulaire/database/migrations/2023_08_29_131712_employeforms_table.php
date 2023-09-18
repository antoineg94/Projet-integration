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
        Schema::create('employeforms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employe_id')->constrained();
            $table->foreignId('formulaire_id')->constrained();
            $table->string('consulte', 255)->nullable();
            $table->string('consultant', 255)->nullable();
            $table->date('date_consulte')->nullable();
            $table->string('statut', 255)->nullable();
            $table->date('date_formulaire')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeforms');
    }
};

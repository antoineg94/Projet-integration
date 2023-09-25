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
        Schema::create('consulterprocedures', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255);
            $table->string('description', 255);
            $table->float('departement_id');
            $table->string('lien', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consulterprocedures');
    }
};
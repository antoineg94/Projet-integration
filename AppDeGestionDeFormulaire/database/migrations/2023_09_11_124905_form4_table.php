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
        Schema::create('Form4', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeform_id')->constrained();          
            $table->float('no_unite')->nullable();
            $table->string('departement', 255)->nullable();
            $table->date('vehicule_citoyen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form4');
    }
};

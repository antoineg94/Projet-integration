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
        Schema::create('temoinforms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('temoin_id')->constrained();
            $table->float('form1_id')->nullable();
            $table->float('form2_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temoinforms');
    }
};

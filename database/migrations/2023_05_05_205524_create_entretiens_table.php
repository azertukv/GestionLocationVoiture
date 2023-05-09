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
        Schema::create('entretiens', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateEntretien');
            $table->string('typeEntretien');
            $table->string('kilometrageEntretien');
            $table->string('kilometrageProchainEntretien');
            $table->string('description');
            $table->string('piecesChangees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entretiens');
    }
};

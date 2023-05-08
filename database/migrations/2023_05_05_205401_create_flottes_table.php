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
        Schema::create('flottes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('immatriculation');
            $table->string('marque');
            $table->string('type');
            $table->date('modele');
            $table->integer('kilometrage');
            $table->integer('nbrPorte');
            $table->string('couleur');
            $table->string('dispnibilite');
            $table->date('expeditionCarteGrise');
            $table->date('dateFinAssurance');
            $table->float('prixLocation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flottes');
    }
};

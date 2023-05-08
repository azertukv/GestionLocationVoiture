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
        Schema::table('clients', function (Blueprint $table) {
            $table->integer('contrat_id')->unsigned();
            $table->foreign('contrat_id')->references('id')->on('contrats');
        });
        Schema::table('incidents', function (Blueprint $table) {
            $table->integer('contrat_id')->unsigned();
            $table->foreign('contrat_id')->references('id')->on('contrats');
        });
        Schema::table('flottes', function (Blueprint $table) {
            $table->integer('contrat_id')->unsigned();
            $table->foreign('contrat_id')->references('id')->on('contrats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['contrat_id']);
            $table->dropColumn('contrat_id');
        });
        Schema::table('incidents', function (Blueprint $table) {
            $table->dropForeign(['contrat_id']);
            $table->dropColumn('contrat_id');
        });
        Schema::table('flottes', function (Blueprint $table) {
            $table->dropForeign(['contrat_id']);
            $table->dropColumn('contrat_id');
        });
    }
};

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
        Schema::table('contrats', function (Blueprint $table) {
            $table->integer('flotte_id')->unsigned();
            $table->foreign('flotte_id')->references('id')->on('flottes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contrats', function (Blueprint $table) {
            $table->integer('flotte_id')->unsigned();
            $table->foreign('flotte_id')->references('id')->on('flottes');
        });
    }
};

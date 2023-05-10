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
        Schema::table('flottes', function (Blueprint $table) {
            $table->integer('operation_id')->unsigned();
            $table->foreign('operation_id')->references('id')->on('operations');
        });
        Schema::table('entretiens', function (Blueprint $table) {
            $table->integer('operation_id')->unsigned();
            $table->foreign('operation_id')->references('id')->on('operations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flottes', function (Blueprint $table) {
            $table->integer('operation_id')->unsigned();
            $table->foreign('operation_id')->references('id')->on('operations');
        });
        Schema::table('entretiens', function (Blueprint $table) {
            $table->integer('operation_id')->unsigned();
            $table->foreign('operation_id')->references('id')->on('operations');
        });
    }
};

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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('flotte_id')->unsigned();
            $table->foreign('flotte_id')->references('id')->on('flottes');
        });
        Schema::table('operations', function (Blueprint $table) {
            $table->integer('flotte_id')->unsigned();
            $table->foreign('flotte_id')->references('id')->on('flottes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['flotte_id']);
            $table->dropColumn('flotte_id');
        });
        Schema::table('operations', function (Blueprint $table) {
            $table->dropForeign(['flotte_id']);
            $table->dropColumn('flotte_id');
        });
    }
};

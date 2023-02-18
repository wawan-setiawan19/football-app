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
        Schema::create('klasemen', function (Blueprint $table) {
            $table->id();
            $table->integer('id_team');
            $table->integer('match_play');
            $table->integer('win');
            $table->integer('draw');
            $table->integer('lose');
            $table->integer('goal_for');
            $table->integer('goal_against');
            $table->integer('goal_difference');
            $table->integer('point');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klasemen');
    }
};

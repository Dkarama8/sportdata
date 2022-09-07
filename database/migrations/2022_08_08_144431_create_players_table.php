<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('primary_position');
            $table->string('secondary_position');
            $table->string('dominant_hand');
            $table->float('height');
            $table->float('weight');
            $table->date('day_of_birth');
            $table->integer('years');
            $table->float('mother_height');
            $table->float('father_height');
            $table->string('oib')->unique();
            $table->string('phone_number')->unique();
            $table->string('first_sport');
            $table->string('school');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};

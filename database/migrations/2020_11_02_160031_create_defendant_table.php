<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefendantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defendants', function (Blueprint $table) {
            $table->id();
            $table->integer('prosecutor_id')->unsigned();
            $table->string('name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('age');
            $table->string('gender');
            $table->string('nationality');
            $table->string('address');
            $table->string('religion');
            $table->string('profession');
            $table->string('education');
            $table->string('stage_of_trial');
            $table->string('sentence');
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
        Schema::dropIfExists('defendant');
    }
}

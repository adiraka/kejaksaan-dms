<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence_letters', function (Blueprint $table) {
            $table->id();
            $table->integer('defendant_id')->unsigned();
            $table->integer('prosecutor_id')->unsigned();
            $table->string('letter_number');
            $table->string('evidence_number');
            $table->string('rack');
            $table->string('column');
            $table->string('row');
            $table->string('type');
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
        Schema::dropIfExists('evidence');
    }
}

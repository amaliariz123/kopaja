<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExampleExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example_exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tax')->unsigned();
            $table->string('title');
            $table->text('question_text');
            $table->string('question_image')->nullable();
            $table->text('answer_text');
            $table->string('answer_image')->nullable();
            $table->timestamps();

            $table->foreign('id_tax')
                    ->references('id')->on('taxes')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('example_exercises');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberExerciseAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_exercise_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('exercise_questions')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('answer');
            $table->boolean('isRight');
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
        Schema::dropIfExists('member_exercise_answers');
    }
}

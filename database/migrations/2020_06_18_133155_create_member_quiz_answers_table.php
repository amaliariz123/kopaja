<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberQuizAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_quiz_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')
                    ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('quiz_questions')
                    ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('answer')->nullable();
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
        Schema::dropIfExists('member_quiz_answers');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $member_id
 * @property int $question_id
 * @property int $answer
 * @property boolean $isRight
 * @property string $created_at
 * @property string $updated_at
 * @property Member $member
 * @property ExerciseQuestion $exerciseQuestion
 */
class MemberExerciseAnswer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'member_exercise_answers';

    /**
     * @var array
     */
    protected $fillable = ['member_id', 'question_id', 'answer', 'isRight', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exerciseQuestion()
    {
        return $this->belongsTo('App\Models\ExerciseQuestion', 'question_id');
    }
}

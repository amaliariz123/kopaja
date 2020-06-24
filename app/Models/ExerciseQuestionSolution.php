<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $question_id
 * @property string $solution
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property ExerciseQuestion $exerciseQuestion
 */
class ExerciseQuestionSolution extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exercise_question_solutions';

    /**
     * @var array
     */
    protected $fillable = ['question_id', 'solution', 'image', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exerciseQuestion()
    {
        return $this->belongsTo('App\Models\ExerciseQuestion', 'question_id');
    }
}

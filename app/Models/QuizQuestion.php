<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $course_id
 * @property string $question
 * @property string $option_a
 * @property string $option_b
 * @property string $option_c
 * @property string $option_d
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property Course $course
 */
class QuizQuestion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'quiz_questions';

    /**
     * @var array
     */
    protected $fillable = ['quiz_id', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'image', 'right_answer', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quiz()
    {
        return $this->belongsTo('App\Models\Quiz');
    }
}

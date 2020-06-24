<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_tax
 * @property string $question
 * @property string $option_a
 * @property string $option_b
 * @property string $option_c
 * @property string $option_d
 * @property string $right_answer
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property Tax $tax
 */
class ExerciseQuestion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exercise_questions';

    /**
     * @var array
     */
    protected $fillable = ['id_tax', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'right_answer', 'image', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tax()
    {
        return $this->belongsTo('App\Models\Tax', 'id_tax');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exerciseQuestionSolution()
    {
        return $this->hasMany('App\Models\ExerciseQuestionSolution');
    }
}

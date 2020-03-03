<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_tax
 * @property string $title
 * @property string $question_text
 * @property string $question_image
 * @property string $answer_text
 * @property string $answer_image
 * @property string $created_at
 * @property string $updated_at
 * @property Tax $tax
 */
class ExampleExercise extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'example_exercises';

    /**
     * @var array
     */
    protected $fillable = ['id_tax', 'title', 'question_text', 'question_image', 'answer_text', 'answer_image', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tax()
    {
        return $this->belongsTo('App\Tax', 'id_tax');
    }
}

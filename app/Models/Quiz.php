<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $level
 * @property string $duration
 * @property string $created_at
 * @property string $updated_at
 */
class Quiz extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'quizzes';

    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'image', 'level', 'duration', 'created_at', 'updated_at'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quizQuestion()
    {
        return $this->hasMany('App\Models\QuizQuestion', 'quiz_id');
    }

}

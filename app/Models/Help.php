<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $questions
 * @property string $answers
 * @property string $created_at
 * @property string $updated_at
 */
class Help extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'helps';

    /**
     * @var array
     */
    protected $fillable = ['question', 'answer', 'created_at', 'updated_at'];

}

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
class Course extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'courses';

    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'image', 'level', 'duration', 'created_at', 'updated_at'];

}

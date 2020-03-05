<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $tax_type
 * @property string $module
 * @property string $created_at
 * @property string $updated_at
 * @property ExampleExercise[] $exampleExercises
 */
class Tax extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'taxes';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'tax_type', 'module', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exampleExercises()
    {
        return $this->hasMany('App\Models\ExampleExercise', 'id_tax');
    }
}

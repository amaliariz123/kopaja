<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $picture
 * @property string $created_at
 * @property string $updated_at
 */
class Developer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'developer_team';

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'picture', 'created_at', 'updated_at'];

}

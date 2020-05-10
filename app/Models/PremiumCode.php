<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class PremiumCode extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'premium_codes';

    /**
     * @var array
     */
    protected $fillable = ['code', 'status', 'created_at', 'updated_at'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property int $province_id
 * @property int $city_id
 * @property string $date_of_birth
 * @property string $institution
 * @property string $member_status
 * @property string $premium_code
 * @property string $created_at
 * @property string $updated_at
 * @property City $city
 * @property Province $province
 * @property User $user
 */
class Member extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'members';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'province_id', 'city_id', 'date_of_birth', 'institution', 'member_status', 'premium_code', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo('App\Models\Province');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function testimonial()
    {
        return $this->hasMany('App\Models\Testimonial');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $provinsi
 * @property string $p_bsni
 * @property City[] $cities
 * @property Member[] $members
 */
class Province extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'provinces';

    /**
     * @var array
     */
    protected $fillable = ['provinsi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany('App\Models\City', 'province_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany('App\Models\Member');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $provinsi_id
 * @property string $kabupaten_kota
 * @property string $ibu_kota
 * @property string $k_bsni
 * @property string $created_at
 * @property string $updated_at
 * @property Province $province
 * @property Member[] $members
 */
class City extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cities';

    /**
     * @var array
     */
    protected $fillable = ['provinsi_id', 'kabupaten/kota', 'ibu_kota'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo('App\Models\Province', 'provinsi_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany('App\Models\Member');
    }
}

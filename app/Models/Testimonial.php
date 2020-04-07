<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property int $id_member
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property Member $member
 */
class Testimonial extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'testimonials';

    /**
     * @var array
     */
    protected $fillable = ['id_member', 'content', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo('App\Models\Member', 'id_member');
    }
}

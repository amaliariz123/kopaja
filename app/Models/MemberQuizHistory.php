<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $member_id
 * @property int $quiz_id
 * @property int $score
 * @property string $created_at
 * @property string $updated_at
 * @property Member $member
 * @property Quiz $quiz
 */
class MemberQuizHistory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'member_quiz_histories';

    /**
     * @var array
     */
    protected $fillable = ['member_id', 'quiz_id', 'score', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quiz()
    {
        return $this->belongsTo('App\Models\Quiz');
    }
}

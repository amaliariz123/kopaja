<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

/**
 * @property integer $id
 * @property string $fullname
 * @property string $email
 * @property string $password
 * @property string $email_verified_at
 * @property string $profile_picture
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Member[] $members
 * @property PermissionUser[] $permissionUsers
 * @property RoleUser[] $roleUsers
 * @property Testimonial[] $testimonials
 */
class User extends Authenticatable
{

    use Notifiable;
    use HasRoleAndPermission;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'users';

    /**
     * For disable auto increments id field.
     * 
     * @var string
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id','fullname', 'email', 'password', 'profile_picture', 'remember_token', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany('App\Models\Member');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissionUsers()
    {
        return $this->hasMany('App\PermissionUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roleUsers()
    {
        return $this->hasMany('App\RoleUser');
    }
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\PasswordReset;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Models\Role;

use Auth;

class User extends Authenticatable
{
    use HasRoles ,Notifiable,HasApiTokens;

//	 use HasRolesAndAbilities;

    protected $table = 'users';

    use SoftDeletes;

    protected $dates = ['deleted_at'];

 
    protected $fillable = [
        'name', 'email', 'password','email_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function school()
    {
      return $this->hasOne(School::class);
    }

	







}

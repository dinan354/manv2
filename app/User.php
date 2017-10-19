<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPZen\LaravelRbac\Traits\Rbac;

class User extends Authenticatable
{
    use Rbac;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = ['*'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function myrole() {
      return $this->belongsToMany('PHPZen\LaravelRbac\Model\Role');
    }

    public function getAvatarAttribute($value) {
      if($value != null){
        return env('URL_AVATAR') . $value;
      }
      return env('URL_AVATAR') . "default.jpg";
    }
}

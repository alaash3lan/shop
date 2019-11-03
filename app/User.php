<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    /**
     * role belong to user relation
     *
     * @return mixed
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }


    /**
     * check if user is subscriber
     *
     * @return boolean
     */
    public function isAdmin() :bool
    {
        return $this->role->name == 'admin' ? true : false;
    }


    /**
     * check if user is subscriber
     *
     * @return boolean
     */
    public function isSub() :bool
    {
        return $this->role->name == 'subscriber' ? true : false;
    }







}

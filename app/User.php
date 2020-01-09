<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

// class User extends Authenticatable implements MustVerifyEmail
class User extends Authenticatable
{
           use Notifiable;

    protected $table = 'users';
    public $timestamps = true;




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname','type','permission', 'email', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //     public function files()
    // {
    //     return $this->hasMany('File');
    // }

    // public function reports()
    // {
    //     return $this->hasMany('Report', 'user_id');
    // }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }


     public function getAvatarUrlAttribute()
    {
        return Storage::url('avatars/'.$this->id.'/'.$this->avatar);
    }


    /**

     * Add a mutator to ensure hashed passwords
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }


     public function files()
    {
        return $this->hasMany('Efile');
    }

}


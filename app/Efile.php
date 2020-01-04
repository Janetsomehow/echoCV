<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Efile extends Model
{
    
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname','type','permission', 'email', 'password',
    ];

    

     public function user()
    {
        return $this->belongsTo('User');
    }

    public function company()
    {
        return $this->belongsTo('Company');
    }


}

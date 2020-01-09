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
        'source','user_id','company_id','status','path','size','name'
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

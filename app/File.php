<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model 
{

    protected $table = 'files';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('User');
    }

}
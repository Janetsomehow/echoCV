<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable =[
        'name',
        'website',
        'country',
        'p_contact',
        'tags',
        'fund_stage',
        'inv_status',
        'lead',
        'analyst',
    ];
    //
}

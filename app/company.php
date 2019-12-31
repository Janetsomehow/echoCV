<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'companies';
    public $timestamps = true;


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

    public function reports()
    {
        return $this->hasOne(Report::class);
    }

}

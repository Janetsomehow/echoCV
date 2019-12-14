<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  protected $fillable = [
    'report_title', 'content', 'receiver'
    ];
}

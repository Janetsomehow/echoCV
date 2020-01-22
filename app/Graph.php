<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
  protected $table = 'graphs';
  public $timestamps = true;


  protected $fillable = [
  'name', 'desc', 'percent', 'numb', 'aaa', 'bbb', 'ccc', 'ddd', 'eee',
  'fff', 'ggg', 'hhh', 'iii', 'jjj', 'kkk', 'lll', 'aaa1', 'bbb1', 'ccc1',
   'ddd1', 'eee1', 'fff1', 'ggg1', 'hhh1', 'iii1', 'jjj1', 'kkk1', 'lll1'
  ];
}

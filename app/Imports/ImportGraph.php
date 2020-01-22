<?php

namespace App\Imports;

use App\Graph;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportGraph implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Graph([
          'name'   => $row[0],
          'desc'   => $row[1],
          'percent'=> $row[2],
          'number' => $row[3],
          'aaa'    => $row[4],
          'bbb'    => $row[5],
          'ccc'    => $row[6],
          'ddd'    => $row[7],
          'eee'    => $row[8],
          'fff'    => $row[9],
          'ggg'    => $row[10],
          'hhh'    => $row[11],
          'iii'    => $row[12],
          'jjj'    => $row[13],
          'kkk'    => $row[14],
          'lll'    => $row[15],
          'aaa1'   => $row[16],
          'bbb1'   => $row[17],
          'ccc1'   => $row[18],
          'ddd1'   => $row[19],
          'eee1'   => $row[20],
          'fff1'   => $row[21],
          'ggg1'   => $row[22],
          'hhh1'   => $row[23],
          'iii1'   => $row[24],
          'jjj1'   => $row[25],
          'kkk1'   => $row[26],
          'lll1'   => $row[27],
        ]);
    }
}

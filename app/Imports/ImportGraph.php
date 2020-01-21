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
          'aaa'    => $row[5],
          'bbb'    => $row[6],
          'ccc'    => $row[7],
          'ddd'    => $row[8],
          'eee'    => $row[9],
          'fff'    => $row[10],
          'ggg'    => $row[11],
          'hhh'    => $row[12],
          'iii'    => $row[13],
          'jjj'    => $row[14],
          'kkk'    => $row[15],
          'lll'    => $row[16],
          'aaa1'    => $row[17],
          'bbb1'    => $row[18],
          'ccc1'    => $row[19],
          'ddd1'    => $row[20],
          'eee1'    => $row[21],
          'fff1'    => $row[22],
          'ggg1'    => $row[23],
          'hhh1'    => $row[24],
          'iii1'    => $row[25],
          'jjj1'    => $row[26],
          'kkk1'    => $row[27],
          'lll1'    => $row[28],
        ]);
    }
}

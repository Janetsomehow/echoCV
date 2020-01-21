<?php

namespace App\Exports;

use App\Graph;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportGraph implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Graph::all();
    }
}

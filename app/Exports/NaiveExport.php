<?php

namespace App\Exports;

use App\Models\Naive;
use Maatwebsite\Excel\Concerns\FromCollection;

class NaiveExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Naive::all();
    }
}

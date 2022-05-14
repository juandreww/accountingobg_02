<?php

namespace App\Exports;

use App\Models\UsingMoney;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsingMoneyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UsingMoney::all();
    }
}

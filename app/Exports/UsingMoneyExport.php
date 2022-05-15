<?php

namespace App\Exports;

use App\Models\UsingMoney;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;


class UsingMoneyExport implements FromQuery
{
    use Exportable;

    // public function collection()
    // {
    //     // $data = UsingMoney::get();
    //     $result = [];
    //     // foreach ($data as $d) {
    //     //     $result[] = [
    //     //         'date' => $d->date,
    //     //         'amount'=> $d->amount,
    //     //         'note' => $d->note
    //     //     ];
    //     // }
    //     return $result;
    // }

    public function query()
    {
        return UsingMoney::query();
    }
}

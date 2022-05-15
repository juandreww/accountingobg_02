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
        $data = UsingMoney::get();
        $result = [];
        foreach ($data as $d) {
            $result[] = [
                'date' => $d->date,
                'amount'=> $d->amount,
                'note' => $d->note
            ];
        }
        return $result;
    }
}

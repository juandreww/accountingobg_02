<?php

namespace App\Exports;

use App\Models\UsingMoney;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Events\AfterSheet;
use \Maatwebsite\Excel\Sheet;
use \Maatwebsite\Excel\Reader;

Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
    $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
});

class UsingMoneyExport implements FromQuery, WithMapping, WithHeadings, WithEvents, WithStartRow
{
    use Exportable, RegistersEventListeners;

    public function query()
    {
        return UsingMoney::query();
    }

    public function startRow(): int
    {
        return 2;
    }

    public function map($data): array
    {
        return [
            $data->date,
            $data->note,
            $data->amount,
        ];
    }

    public function headings(): array
    {
        return [
            'Date',
            'Description',
            'Amount',
        ];
    }

    public static function beforeExport(BeforeExport $event)
    {
        //
    }

    public static function beforeWriting(BeforeWriting $event)
    {
        //
    }

    public static function beforeSheet(BeforeSheet $event)
    {
        //
    }

    public static function afterSheet(AfterSheet $event)
    {
        $event->sheet->getColumnDimension('A')->setWidth(20);
        $event->sheet->getColumnDimension('B')->setWidth(20);
        $event->sheet->getColumnDimension('C')->setWidth(20);

        $event->sheet->getColumnDimension('A')->setWidth(20);
        $event->sheet->getColumnDimension('B')->setWidth(20);
        $event->sheet->getColumnDimension('C')->setWidth(20);

        $event->sheet->styleCells(
            'A1:C1',
            [
                // 'alignment' => [
                //     'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                // ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['argb' => 'F5EDF6']
                ],
                'font' => [
                    'bold' => true,
                ],
            ]
        );
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => [self::class, 'afterSheet']
        ];
    }
}

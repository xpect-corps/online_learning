<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class ClinicinaProductivityExport implements FromCollection,WithHeadings, WithEvents, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $productivity;

    public function __construct($productivity)
    {
        $this->productivity = $productivity;
    }

    public function collection()
    {
        foreach($this->productivity as $key => $data){
            $output[] = [
                $data['slno'],
                $data['name'],
                $data['ftd_target'] != 0 ? $data['ftd_target'] : '0',
                $data['ftd_achd'] != 0 ? $data['ftd_achd'] : '0',
                $data['ftd_percentage'] != 0 ? $data['ftd_percentage'].' %' : '0 %',
                $data['mtd_target'] != 0 ? $data['mtd_target'] : '0',
                $data['mtd_achd'] != 0 ? $data['mtd_achd'] : '0',
                $data['mtd_percentage'] != 0 ? $data['mtd_percentage'].' %' : '0 %',
            ];
        }
        return collect($output);
    }

    public function headings():array
   {
        return[
            'SL.NO',
            'DISCIPLINE',
            'FTD TARGET',
            'FTD ACHD',
            'FTD %',
            'MTD TARGET',
            'MTD ACHD',
            'MTD %',
        ];
    } 

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
  
                $cellRange = 'A1:H1'; // All headers

                $event->sheet->getDelegate()->getStyle($cellRange)
                        ->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('29badb');

                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);

                $count = count($this->productivity)+1; //change color for Total section
                $event->sheet->getDelegate()->getStyle('A'.$count.':H'.$count)
                        ->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('ffa4ffa4');
            },
        ];
    }
}

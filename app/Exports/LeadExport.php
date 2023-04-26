<?php

namespace App\Exports;

use App\Models\Lead;
use App\Models\leadSource;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class LeadExport implements FromCollection,WithHeadings, WithEvents, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $leadData;

   public function __construct($leadData)
    {
        $this->leadData = $leadData;
    }

    public function collection()
    { 
        foreach($this->leadData as $lead){
            $output[] = [
                '#' . $lead['id'],
                $lead['name'],
                $lead['count'] != 0 ? $lead['count'] : '0',
            ];
        }
        return collect($output);
    }

   public function headings():array
   {
        return[
            'Id',
            'Source',
            'Count' 
        ];
    } 

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
  
                $cellRange = 'A1:C1'; // All headers

                $event->sheet->getDelegate()->getStyle($cellRange)
                        ->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('29badb');

                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
            },
        ];
    }
}

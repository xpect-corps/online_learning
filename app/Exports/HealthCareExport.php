<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class HealthCareExport implements FromCollection,WithHeadings, WithEvents, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $bookings;

    public function __construct($bookings)
    {
        $this->bookings = $bookings;
        // $this->dcBookings = $dcBookings;
    }

    public function collection()
    {
        foreach($this->bookings as $key => $booking){
            $output[] = [
                $booking['slno'],
                $booking['name'],
                $booking['dc_ftd'] != 0 ? $booking['dc_ftd'] : '0',
                $booking['dc_mtd'] != 0 ? $booking['dc_mtd'] : '0',
                $booking['hhc_ftd'] != 0 ? $booking['hhc_ftd'] : '0',
                $booking['hhc_mtd'] != 0 ? $booking['hhc_mtd'] : '0',
            ];
        }
        // $empty =[];
        // array_push($output, $empty);
        // foreach($this->dcBookings as $key => $booking){
        //     $output2[] = [
        //         $booking['slno'],
        //         $booking['name'],
        //         $booking['ftd'] != 0 ? $booking['ftd'] : '0',
        //         $booking['mtd'] != 0 ? $booking['mtd'] : '0',
        //     ];
        // }

        // array_push($output, $output2);
        return collect($output);
    }

    public function headings():array
   {
        return[
            'SL.NO',
            'DISCIPLINE',
            'DC VISITS - FTD',
            'DC VISITS - MTD',
            'HHC VISITS - FTD',
            'HHC VISITS - MTD',
        ];
    } 

    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
  
                $cellRange = 'A1:F1'; // All headers

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

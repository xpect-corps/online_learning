<?php

namespace App\Imports;

use App\Models\HealthcareLabtest;
use App\Models\HealthcareLabtestLocation;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportLabTest implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){

            if($row['role'] == 'Doctor'){
                $role = 1;
            }elseif($row['role'] == 'Nurse'){
                $role = 2;
            }elseif($row['role'] == 'Lab Technician'){
                $role = 3;
            }
            $hc_labtest = new HealthcareLabtest();
            $hc_labtest->labtest_name = $row['name'];
            $hc_labtest->code = $row['code'];
            $hc_labtest->clinician_role = $role;
            // $hc_labtest->description = $row->description;
            $hc_labtest->save();

            $labtest_pricing = new HealthcareLabtestLocation();
            $labtest_pricing->hhc_labtest = $hc_labtest->id;
            $labtest_pricing->location_id = 3;
            $labtest_pricing->amount = $row['price'];
            $labtest_pricing->offer_amount = 0;
            $labtest_pricing->offer_is_active = 0;
            $labtest_pricing->is_active = 1;
            $labtest_pricing->is_featured = 0;
            $labtest_pricing->is_trending = 0;
            $labtest_pricing->save();
        }
    }
}

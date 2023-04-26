<?php

namespace App\Imports;

use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportLead implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){

            $splitName = explode(' ', $row['full_name'], 2);
            $first_name = $splitName[0];
            $last_name = !empty($splitName[1]) ? $splitName[1] : '';

            $phoneNumber = str_replace( array( 'p:+' ), '', $row['phone_number']);
            // dd($phoneNumber);
            if($row['platform'] == 'fb'){
                $leadFrom = 1;
            }elseif($row['platform'] == 'ig'){
                $leadFrom = 2;
            }

            $lead = new Lead();
            $lead->lead_campaign = $row['campaign_name'];
            $lead->created_at = Carbon::parse($row['created_time'])->format('Y-m-d H:i:s');
            $lead->lead_source = $leadFrom;
            $lead->email = $row['email'];
            $lead->first_name = $first_name;
            $lead->last_name = $last_name;
            $lead->contact_no = $phoneNumber;
            $lead->lead_status = 1;
            $lead->save();
                // '', //Location
            // ];
            // $lead = Lead::create($data);
            Lead::where('id',$lead->id)->update(['lead_id'=>$lead->id+1000]);
        }
    }
}

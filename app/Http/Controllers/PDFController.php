<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Clinician;
use App\Models\DcBookingConsumable;
use App\Models\DcBookingTask;
use App\Models\HHCBooking;
use App\Models\HhcBookingConsumables;
use App\Models\HhcBookingTask;
use App\Models\Settings;
use App\Models\TaxGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    //
    public function generatePDF($id)
    {
        $booking_details = Booking::where('id', $id)->first();
        // dd($bookings->tax_details);

        $task_details = DcBookingTask::leftjoin('booking_task_type','booking_task_type.id','dc_booking_task.task_type')
            ->leftjoin('services_master','services_master.id','dc_booking_task.service_id')
            ->leftjoin('clinicians','clinicians.id','dc_booking_task.clinician')
            ->leftjoin('clinician_role','clinician_role.id','clinicians.clinician_role')
            ->leftjoin('departments','departments.id','clinicians.department')
            ->leftjoin('clinician_specialization','clinician_specialization.id','clinicians.clinician_specialization')
            ->leftjoin('designations','designations.id','clinicians.designation')
            ->leftjoin('users','users.id','clinicians.user_id')
            ->select('*','booking_task_type.name as task_type','task_date','services_master.name as service','task_date',
            'users.first_name as f_name','users.last_name as l_name','clinician_role.name as role','clinician_specialization.name as specialization',
            'designations.name as designation','departments.name as department','amount_without_tax','dc_booking_task.id as dc_booking_task_id','dc_booking_task.task_type as dc_booking_task_type','clinicians.id as clinician_id')
            ->where('booking_id',$id)
            ->orderBy('dc_booking_task.created_at','desc')
            ->get();

            $final_service_amount = 0;
        foreach($task_details as $val){
            $final_service_amount += round($val->amount_without_tax);
        }

        $clinician = Clinician::leftJoin('users','users.id','clinicians.user_id')->where('clinicians.id', $task_details[0]->clinician_id)->first();

        $consumables_data = DcBookingConsumable::leftjoin('dc_booking_task','dc_booking_task.id','dc_booking_consumables.dc_booking_task')->
            leftjoin('consumables_master','consumables_master.id','dc_booking_consumables.consumables')
            ->leftjoin('clinicians','clinicians.id','dc_booking_task.clinician')
            ->leftjoin('clinician_role','clinician_role.id','clinicians.clinician_role')
            ->leftjoin('users','users.id','clinicians.user_id')
            ->select('consumables_master.name as consumable',
            'users.first_name as f_name',
            'users.last_name as l_name',
            'clinician_role.name as role','dc_booking_task.clinician','dc_booking_consumables.quantity','dc_booking_consumables.amount'
            ,'dc_booking_consumables.id','dc_booking_task.clinician','dc_booking_consumables.consumables as dc_consumables')
            ->where('dc_booking_consumables.dc_booking_id',$id)->get();

        $final_consumable_amount = 0;
        foreach($consumables_data as $val){
            $final_consumable_amount +=  round($val->amount*$val->quantity);
        }

        $tax_groups = TaxGroup::where('is_active',1)->get();
        $tax_sum = 0 ;
        $tax_percent_total = 0; 
        foreach ($tax_groups as $grp){
            $taxes = DB::table('taxes')
                ->where('tax_group', $grp->id)
                ->get();
            $tax_percentage = DB::table('taxes')
                ->where('tax_group', $grp->id)
                ->sum('percentage');
            $tax_percent_total += $tax_percentage;
            $tax_sum += (round($final_service_amount + $final_consumable_amount) * $tax_percentage) / 100;
        }

        $total_amount = $tax_sum + (round($final_service_amount + $final_consumable_amount) - round($booking_details->discount_amount));
        $amount_in_words = numberToWord($total_amount);

        $settings = Settings::first();

        $pdf = PDF::loadView('invoice/myPDF', compact('booking_details','task_details','final_service_amount','consumables_data','final_consumable_amount','tax_sum','total_amount','amount_in_words','settings','clinician'));
    return $pdf->stream();
        return $pdf->download('neogen_invoice.pdf');
    }

    //hc pdf generate
    public function hhc_generate_pdf($id)
    {
        $hcbooking_details = HHCBooking::where('id', $id)->first();
        // dd($hcbooking_details);
        $hctask_details = HhcBookingTask::leftjoin('booking_task_type','booking_task_type.id','hhc_booking_task.task_type')
        ->leftjoin('services_master','services_master.id','hhc_booking_task.service_id')
        ->leftjoin('clinicians','clinicians.id','hhc_booking_task.clinician')
        ->leftjoin('clinician_role','clinician_role.id','clinicians.clinician_role')
        ->leftjoin('departments','departments.id','clinicians.department')
        ->leftjoin('clinician_specialization','clinician_specialization.id','clinicians.clinician_specialization')
        ->leftjoin('designations','designations.id','clinicians.designation')
        ->leftjoin('users','users.id','clinicians.user_id')
        ->select('*','booking_task_type.name as task_type','task_date','services_master.name as service','task_date',
        'users.first_name as f_name','users.middle_name as m_name','users.last_name as l_name','clinician_role.name as role','clinician_specialization.name as specialization',
        'designations.name as designation','departments.name as department','amount_without_tax','hhc_booking_task.id as hhc_booking_task_id','hhc_booking_task.task_type as hhc_booking_task_type','clinicians.id as clinician_id')
        ->where('hhc_booking_task.hhc_booking_id', $hcbooking_details->id)
        ->get();

        $hcfinal_service_amount = 0;
        $clinician = '';
        foreach($hctask_details as $val){
            $hcfinal_service_amount += round($val->amount_without_tax);

            if($clinician != ''){
                if($val->clinician_id){
                    $clinician = Clinician::leftJoin('users','users.id','clinicians.user_id')->where('clinicians.id', $val->clinician_id)->first();
                }
            }
        }

        $hc_consumables_data = HhcBookingConsumables::leftjoin('hhc_booking_task','hhc_booking_task.id','hhc_booking_consumables.hhc_booking_task')
        ->leftjoin('consumables_master','consumables_master.id','hhc_booking_consumables.consumables')
        ->leftjoin('clinicians','clinicians.id','hhc_booking_task.clinician')
        ->leftjoin('clinician_role','clinician_role.id','clinicians.clinician_role')
        ->leftjoin('users','users.id','clinicians.user_id')
        ->select('consumables_master.name as consumable',
        'users.first_name as f_name',
        'users.last_name as l_name',
        'clinician_role.name as role','hhc_booking_task.clinician','hhc_booking_consumables.quantity','hhc_booking_consumables.amount'
        ,'hhc_booking_consumables.id','hhc_booking_task.clinician')
        ->where('hhc_booking_consumables.hhc_booking_id',$id)->get();

        $hcfinal_consumable_amount = 0;
        foreach($hc_consumables_data as $val){
            $hcfinal_consumable_amount +=  round($val->amount*$val->quantity);
        }

        $tax_groups = TaxGroup::where('is_active',1)->get();
        $tax_sum = 0 ;
        $tax_percent_total = 0;
        foreach ($tax_groups as $grp){
            $taxes = DB::table('taxes')
                ->where('tax_group', $grp->id)
                ->get();
            $tax_percentage = DB::table('taxes')
                ->where('tax_group', $grp->id)
                ->sum('percentage');
            $tax_percent_total += $tax_percentage;
            $tax_sum += (round($hcfinal_service_amount + $hcfinal_consumable_amount) * $tax_percentage) / 100;
        }
        
        $total_amount = $tax_sum + (round($hcfinal_service_amount + $hcfinal_consumable_amount) - round($hcbooking_details->discount_amount));
        $amount_in_words = numberToWord($total_amount);

        $settings = Settings::first();

        $pdf = PDF::loadView('invoice/hhc_PDF', compact('hcbooking_details','hctask_details','hcfinal_service_amount','hc_consumables_data','hcfinal_consumable_amount','tax_sum','total_amount','amount_in_words','settings','clinician'));
    return $pdf->stream();
        return $pdf->download('neogen_invoice.pdf');
    }

    public function whatsappShareDC($id)
    {
        return redirect()->to('https://wa.me/?text='.urlencode(url('/doctor_booking/invoice/'.$id)));
    }
    public function whatsappShareHHC($id)
    {
        return redirect()->to('https://wa.me/?text='.urlencode(url('/healthcare_booking/invoice/'.$id)));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ActivityTimelineStatus;
use App\Models\City;
use App\Models\ClinicalSymptom;
use App\Models\Clinician;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Lead;
use App\Models\LeadActivityHistory;
use App\Models\LeadCallStatus;
use App\Models\LeadDocuments;
use App\Models\LeadFollowers;
use App\Models\LeadFollowup;
use App\Models\LeadNote;
use App\Models\Qualification;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LocalizationController extends Controller
{
    public function getData(Request $request)
    {
        if($request->key=='statelist')
        {
            $states=State::select('id','state_name')->where('country_id',$request->country_id)->get();
            return response()->json(array('states'=>$states));

        }
        elseif($request->key=='districtlist')
        {
            $cities = City::select('id','name')->where('state_id',$request->state_id)->get();
            return response()->json(array('cities'=>$cities));

        }
        elseif($request->key=='get_mobile_count')
        {
            $mobile_count=User::where('mobile_number',$request->value)->count();
            return response()->json(array('mobile_count'=>$mobile_count));
        }
        elseif($request->key=='get_email_count')
        {
            $email_count=User::where('email',$request->value)->count();
            return response()->json(array('email_count'=>$email_count));
        }
        elseif($request->key == "clinician"){
            $qualifications = Qualification::where('clinician_role',$request->id)->where('status',1)->select('id','name')->get();
            $departments = Department::where('status',1)->select('id','name')->get();
            $designations = Designation::where('clinician_role',$request->id)->where('status',1)->select('id','name')->get();

            return response()->json(array('qualifications'=>$qualifications,'departments'=>$departments,'designations'=>$designations));
        }

        elseif($request->key == 'get_doctor_list')
        {
            $symptom_details=ClinicalSymptom::where('id',$request->id)->first();
            $specialization=$symptom_details->specialization;
            $department=$symptom_details->department;
            $clinician_list=Clinician::leftjoin('users','users.id','clinicians.user_id')->where('clinicians.clinician_specialization',$specialization)->where('clinicians.department',$department)->get();
            return response()->json(array('clinician_list'=>$clinician_list));

        }
        elseif($request->key == 'change_lead_status')
        {
            $lead_id=$request->lead_id;
            $lead_status=$request->lead_status;
            $activity_status_id=ActivityTimelineStatus::lead_status_change;
            Lead::where('id',$lead_id)->update(['lead_status'=>$lead_status]);

            $lead_activity_history=new LeadActivityHistory();
            $lead_activity_history->lead_id=$lead_id;
            $lead_activity_history->activity_status_id=$activity_status_id;
            $lead_activity_history->user_id=Auth::user()->id;
            $lead_activity_history->save();

            return response()->json(array('msg'=>'Lead Status Updated Successfully'));

        }
        elseif($request->key =='convert_lead')
        {
            $lead_id=$request->lead_id;
            $lead_details=Lead::select('contact_no','lead_user_type')->where('id',$lead_id)->first();
            $contact_no=$lead_details->contact_no;
            $mobile_count=User::where('mobile_number',$contact_no)->count();
            if($mobile_count > 0)
            {
            return response()->json(array('status'=>'201','msg'=>'This Mobile No Already Exists. Do you want to convert this lead to child?'));

            }
            else{
            $activity_status_id=ActivityTimelineStatus::Lead_Convert;
            Lead::where('id',$lead_id)->update(['lead_status'=>2]);
            $lead_activity_history=new LeadActivityHistory();
            $lead_activity_history->lead_id=$lead_id;
            $lead_activity_history->activity_status_id=$activity_status_id;
            $lead_activity_history->user_id=Auth::user()->id;
            $lead_activity_history->save();

            $lead_details=Lead::where('id',$lead_id)->first();

            $user=new User();
            $user->first_name=$lead_details->first_name;
            $user->last_name=$lead_details->last_name;
            $user->mobile_number=$lead_details->contact_no;
            $user->country=$lead_details->country;
            $user->email=$lead_details->email;
            $user->state=$lead_details->state;
            $user->city=$lead_details->city;
            $user->city=$lead_details->city;
            $user->dob=$lead_details->dob;
            $user->gender=$lead_details->gender;
            $user->address=$lead_details->address;
            $user->pincode=$lead_details->pincode;
            $user->pincode=$lead_details->pincode;
            $user->is_customer=1;
            $user->save();

            $customer=new Customer();
            $customer->user_id=$user->id;
            $customer->lead_id=$lead_details->id;
            $customer->intake_coordinator_id=$lead_details->lead_assignedto;
            $customer->intake_coordinator_assign_date=$lead_details->lead_assignedto_date;
            $customer->customer_type=$lead_details->lead_user_type;//Normal Customer
            $customer->is_parent=1;
            $customer->source=21;
            $customer->is_child=0;
            $customer->save();

            return response()->json(array('msg'=>'Lead Converted Successfully'));
            }
        }
        elseif($request->key=='confirm_lead_convertion')
        {
            $lead_id=$request->lead_id;
            $activity_status_id=ActivityTimelineStatus::Lead_Convert;
            Lead::where('id',$lead_id)->update(['lead_status'=>2]);
            $lead_activity_history=new LeadActivityHistory();
            $lead_activity_history->lead_id=$lead_id;
            $lead_activity_history->activity_status_id=$activity_status_id;
            $lead_activity_history->user_id=Auth::user()->id;
            $lead_activity_history->save();

            $lead_details=Lead::where('id',$lead_id)->first();

            $user=new User();
            $user->first_name=$lead_details->first_name;
            $user->last_name=$lead_details->last_name;
            $user->mobile_number=null;
            $user->country=$lead_details->country;
            $user->email=$lead_details->email;
            $user->state=$lead_details->state;
            $user->city=$lead_details->city;
            $user->city=$lead_details->city;
            $user->dob=$lead_details->dob;
            $user->gender=$lead_details->gender;
            $user->address=$lead_details->address;
            $user->pincode=$lead_details->pincode;
            $user->pincode=$lead_details->pincode;
            $user->is_customer=1;
            $user->save();

            // Get parent id for converted child
            $user_details=User::where('mobile_number',$lead_details->contact_no)->first();
            $customer_details=Customer::where('user_id',$user_details->id)->first();
            $parent_id=$customer_details->id;


            $customer=new Customer();
            $customer->user_id=$user->id;
            $customer->lead_id=$lead_details->id;
            $customer->source=21;//source lead
            $customer->customer_type=$lead_details->lead_user_type;//Normal Customer
            $customer->is_parent=1;
            $customer->parent_id=$parent_id;
            $customer->is_child=1;
            $customer->save();

            return response()->json(array('msg'=>'Lead Converted Successfully'));
        }
        elseif($request->key=='reassign_lead')
        {
            //lead_status =3---------------------reassigned
            $reassigned_user_id=$request->reassign_user_id;
            $lead_id=$request->lead_id;
            $lead_details=Lead::select('lead_assignedto')->where('id',$lead_id)->first();
            $lead_assignedto=$lead_details->lead_assignedto;
            LeadFollowers::where('user_id',$lead_assignedto)->where('lead_id',$lead_id)->delete();

            Lead::where('id',$lead_id)->update(['lead_assignedto'=>$reassigned_user_id,'lead_assignedto_date'=>date('Y-m-d')]);

            $activity_status_id=ActivityTimelineStatus::Lead_Reassigned;

            LeadFollowers::where('id',$request->follower_id)->delete();

            $lead_activity_history=new LeadActivityHistory();
            $lead_activity_history->lead_id=$lead_id;
            $lead_activity_history->activity_status_id=$activity_status_id;
            $lead_activity_history->enid=$reassigned_user_id;
            $lead_activity_history->user_id=Auth::user()->id;
            $lead_activity_history->save();

            return response()->json(array('msg'=>'Lead Reassigned Successfully'));

        }
        elseif($request->key=='get_lead_document_details')
        {
            $lead_document_details=LeadDocuments::where('id',$request->document_id)->first();
            $lead_document_details['document']=$lead_document_details->document_file_name;
            $lead_document_details['document_file_name']=Storage::disk('image')->url('uploads/lead_documents/'.$lead_document_details->document_file_name);


            return response()->json(array('lead_document_details'=>$lead_document_details));

        }
        elseif($request->key=='get_followup_details')
        {
            $lead_followup_details=LeadFollowup::where('id',$request->followup_id)->first();
            return response()->json(array('lead_document_details'=>$lead_followup_details));

        }
        elseif($request->key=='get_mobile_count_by_type')
        {
            $mobile_count=User::leftjoin('customers','users.id','customers.user_id')->where('customers.customer_type',$request->user_type)->where('users.mobile_number',$request->value)->count();
            return response()->json(array('mobile_count'=>$mobile_count));
        }
        elseif($request->key=='lead_status_type'){
            $type = LeadCallStatus::where('type',$request->status_value)->get();
            return response()->json(['type'=>$type]);
        }

        if($request->key='get_lead_note')
        {
            $lead_note_details=LeadNote::where('id',$request->lead_note_id)->first();
            return response()->json(array('lead_note_details'=>$lead_note_details));

        }


    }
    function addFollower(Request $request)
    {
            $lead_details=Lead::select('lead_assignedto')->where('id',$request->lead_id)->first();
            $exist= LeadFollowers::where('lead_id',$request->lead_id)->where('follower_id',$request->follower_id)->count();
            if($exist==0){
            $lead_followers=new LeadFollowers();
            $lead_followers->lead_id=$request->lead_id;
            $lead_followers->user_id=$lead_details->lead_assignedto;
            $lead_followers->follower_id=$request->follower_id;
            $lead_followers->save();
            

            $activity_status_id=ActivityTimelineStatus::Lead_Add_Follower;

            $lead_activity_history=new LeadActivityHistory();
            $lead_activity_history->lead_id=$request->lead_id;
            $lead_activity_history->activity_status_id=$activity_status_id;
            $lead_activity_history->user_id=Auth::user()->id;
            $lead_activity_history->enid=$request->follower_id;
            $lead_activity_history->save();

            return response()->json(array('msg'=>'Lead Follower Added Successfully'));
            }
            else{
                return response()->json(array('msg'=>'Already an existing follower')); 
            }
    }
    function removeFollower(Request $request)
    {
            $lead_follower_details=LeadFollowers::where('id',$request->follower_id)->first();

            $activity_status_id=ActivityTimelineStatus::Lead_Remove_Follower;
            $lead_activity_history=new LeadActivityHistory();
            $lead_activity_history->lead_id=$lead_follower_details->lead_id;
            $lead_activity_history->activity_status_id=$activity_status_id;
            $lead_activity_history->user_id=Auth::user()->id;
            $lead_activity_history->enid=$lead_follower_details->follower_id;
            $lead_activity_history->save();
            LeadFollowers::where('id',$request->follower_id)->delete();

    }
    function get_question_answers(Request $request)
    {

    }
    function getDatasForSelection(Request $request)
    {
        if($request->key == 'get_symptom_list')
        {
            $clinical_symptoms=ClinicalSymptom::select('id','name')->get();
            return response()->json($clinical_symptoms);

        }
    }
}

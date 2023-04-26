<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\TaxGroup;
use App\Models\Tax;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    //

    public function index(Request $request)
    {

        $settings = Settings::first();
        // $taxGroups = TaxGroup::orderBy('id','desc')->get();
        // $taxes = Tax::all();
        // $taxes=Tax::orderBy('taxes.id','desc')->leftjoin('tax_groups','tax_groups.id','taxes.tax_group')
        // ->select('tax_groups.*','taxes.*')->get();

        return view('settings.index', compact('settings'));
    }
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }

    public function updateGeneral(Request $request)
    {
        $settings = Settings::where('id', 1)->first();

        if ($request->hasFile('app_image')) {

            $file_path = storage_path() . '/uploads/app_images/' . $settings->logo;
            if (File::exists($file_path)) {
                file::delete($file_path);
            }
            $imageName = time().uniqid().'.' . $request->app_image->extension();
            $request->app_image->move(storage_path('uploads/app_images'), $imageName);
        }
        if ($request->hasFile('app_image_small')) {
            // dd('here');
            $file_path1 = storage_path() . '/uploads/app_images/' . $settings->small_logo;
            if (File::exists($file_path1)) {
                file::delete($file_path1);
            }
            $imageName1 = time().uniqid().'.' . $request->app_image_small->extension();
            $request->app_image_small->move(storage_path('uploads/app_images'), $imageName1);
        }

        $update_data = ['app_name' => $request->app_name,
            'email' => $request->email,
            'footer_text' => $request->footer_text,
            'logo' => $request->hasFile('app_image') ? $imageName : $settings->logo,
            'small_logo' => $request->hasFile('app_image_small') ? $imageName1 : $settings->small_logo];

        Settings::where('id', 1)->update($update_data);

        Session::flash('active_tab', 'general');

        return redirect('/settings')->with('success','General Settings Updated');
    }
    public function updatePayment(Request $request)
    {
        $update_data = ['rezorpay_key_id' => $request->rezorpay_key_id,
            'razorpay_key_secret' => $request->razorpay_key_secret];

        Settings::where('id', 1)->update($update_data);

        Session::flash('active_tab', 'payment');

        return redirect('/settings')->with('success','Payment Credentials Updated');
    }

    public function updateSMS(Request $request)
    {
        $update_data = ['two_factor_api_key' => $request->two_factor_api_key,
            'login_otp_template' => $request->login_otp_template];

        Settings::where('id', 1)->update($update_data);

        Session::flash('active_tab', 'sms');

        return redirect('/settings')->with('success','SMS Details Updated');
    }
    public function updateUPI(Request $request)
    {
        $update_data = ['upi_account_id' => $request->upi_account_id,
            'upi_mobile_number' => $request->upi_mobile_number];

        Settings::where('id', 1)->update($update_data);

        Session::flash('active_tab', 'upi');

        return redirect('/settings')->with('success','UPI Details Updated');
    }
    public function update_tax(Request $request)
    {
        $update_tax = ['default_tax_percentage' => $request->tax];

        Settings::where('id', 1)->update($update_tax);

        Session::flash('active_tab', 'tax');

        return redirect('/settings')->with('success','TAX Details Updated');
    }
    public function child_limit_tax(Request $request)
    {
        $update_tax = ['child_limit' => $request->child_limit];

        Session::flash('active_tab', 'child-limit');

        Settings::where('id', 1)->update($update_tax);

        return redirect('/settings')->with('success','Child Limit Details Updated');
    }
    //harshal start
    public function insert_tax(Request $request){
        if(!empty($request->group_id))
        {
            $tax=TaxGroup::find($request->group_id);
            $tax->tax_group_name=$request->tax_group_name;
            $tax->description=$request->description;
            $tax->is_active=$request->status;
            $tax->save();
            // ->update([
            //     'name'=>$request->service_name,
            //     'description'=>$request->ServicesDescription,
            //     'is_active'=>$request->service_status
            //     ]);
                return back() ->with('success','tax group updated successfully');

        }
        else{
        $tax=new TaxGroup();
        $tax->tax_group_name=$request->tax_group_name;
        $tax->description=$request->description;
        $tax->is_active=$request->status;
        $tax->save();
        return back() ->with('success','Tax Group created successfully');
        }
    }
    public function insert_taxes(Request $request){
        if($request->tax_id)
        {
            $tax=Tax::find($request->tax_id);
            $tax->name=$request->tax_name;
            $tax->percentage=$request->percentage;
            $tax->tax_group=$request->group_name;
            $tax->save();
            // ->update([
            //     'name'=>$request->service_name,
            //     'description'=>$request->ServicesDescription,
            //     'is_active'=>$request->service_status
            //     ]);
                return back() ->with('success','tax updated successfully');

        }
        else{

        $tax=new Tax();
        $tax->name=$request->tax_name;
        $tax->percentage=$request->percentage;
        $tax->tax_group=$request->group_name;
        $tax->save();
        return back() ->with('success','Taxes created successfully');
        }
    }
    public function deletegroup($id)
    {
        TaxGroup::find($id)->delete();
    }
    public function deletetax($id)
    {
        Tax::find($id)->delete();
    }
    public function getdatas(Request $request){
        if($request->key=='edit_tax_group')
        {
            $tax_group=TaxGroup::where('id',$request->group_id)->first();
            return response()->json(array('tax_group'=>$tax_group));
        }
        elseif($request->key=='edit_tax'){
            $taxes=Tax::where('id',$request->tax_id)->first();
            return response()->json(array('taxes'=>$taxes));
        }
    }
    // public function group_view(Request $request)
    // {



    //     return view('settings.index', compact('taxGroups'));
    // }
    //harsha end

    // public function deleteLogo()
    // {
    //     $settings = Settings::where('id',1)->first();

    //     $file_path = storage_path().'/uploads/app_images/'.$settings->logo;
    //     if (File::exists($file_path)) {
    //         file::delete($file_path);
    //     }
    //     Settings::where('id',1)->update(['logo'=>null]);

    //     return response('deleted');
    // }

    // public function deleteSmallLogo()
    // {
    //     $settings = Settings::where('id',1)->first();

    //     $file_path = storage_path().'/uploads/app_images/'.$settings->small_logo;
    //     if (File::exists($file_path)) {
    //         file::delete($file_path);
    //     }
    //     Settings::where('id',1)->update(['small_logo'=>null]);

    //     return response('deleted');
    // }
}

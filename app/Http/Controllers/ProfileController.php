<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  public function profile()
  {
    return view('admin.profile');
  }

  public function updateProfile(Request $request)
  {
    $user_datas = User::find(Auth::user()->id);
    if($request->hasFile('image')){
      $file_path = storage_path().'/uploads/profile_images/'.$user_datas->image;
      if (File::exists($file_path)) {
          file::delete($file_path);
      }
      $imageName = time().'.'.$request->image->extension();
      $request->image->move(storage_path('uploads/profile_images'), $imageName);
  }

    $user = User::where('id',Auth::user()->id)->update([
      'first_name'=>$request->first_name,
      'middle_name'=>$request->middle_name,
      'last_name'=>$request->last_name,
      'mobile_number'=>$request->mobile_number,
      'address'=>$request->address,
      'email'=>$request->email,
      // 'country'=>$request->country_id,
      // 'state'=>$request->state_id,
      // 'city'=>$request->city_id,
      // 'is_active'=>$request->is_active,
      // 'latitude'=>$request->latitude,
      // 'longitude'=>$request->longitude,
      // 'landmark'=>$request->landmark,
      // 'pincode'=>$request->pincode,
      'dob'=>$request->dob,
      'password'=>$request->password ? Hash::make($request->password) : $user_datas->password,
      'image'=> $request->hasFile('image') ?  $imageName : $user_datas->image,
    ]);

    return redirect()->back();
    
  }
}

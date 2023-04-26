<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::get();

        return view('locations.index',compact('locations'));
    }

    public function create()
    {
        return view('locations.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'location_name' => 'required',
            'location_desc' => 'required',
        ]);
        $location = new Location();
        $location->location_name = $request->location_name;
        $location->location_desc = $request->location_desc;
        $location->location_bounds = $request->geojson;
        $location->save();

        return redirect('locations')->with('success','Location created successfully');
    }

    public function show($id)
    {
        $location = Location::where('id',$id)->first();

        return view('locations.show',compact('location'));
    }
    public function edit($id)
    {
        $location = Location::where('id',$id)->first();
        return view('locations.edit',compact('location'));
    }

    public function update(Request $request,$id)
    {

        $location['location_name'] = $request->location_name;
        $location['location_desc'] = $request->location_desc;
        $location['location_bounds'] = $request->geojson;
        $location = Location::where('id',$id)->update(['location_name' => $request->location_name,'location_desc' => $request->location_desc,'location_bounds' => $request->geojson]);

        return redirect('locations')->with('success','Location updated successfully');
    }


}

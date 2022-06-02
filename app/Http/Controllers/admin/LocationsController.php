<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LocationsController extends Controller
{
    // function getLocationList(){
    //     $data['locations'] = DB::table('locations')
    //     ->get();
    //     return view('admin/list-location',$data);
    // }

    // function addNewLocation(){
    //     return view('admin/add-location');
    // }

    // function saveLocation(Request $req){
        
    //     $validator = Validator::make($req->all(), [
    //         'LocationName' => 'required'
    //     ]);
 
    //     if ($validator->fails()) {
    //         return redirect('admin/add-location')
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     } else {

    //     $location=new Location;
    //     $location->LocationName=$req->LocationName;
    //     $location->LocationStatus=$req->LocationStatus;
    //     $location->save();
    //     return redirect('admin/list-location');
    //     }
    // }

    // function editLocation($id){
    //     $data['locations'] = DB::table('locations')
    //     ->where('idLocations', '=', $id)
    //     ->first();
    //     return view('admin/update-location',$data);
    // }

    // function updateLocation(Request $req){
    //     DB::table('locations')
    //     ->where('idLocations', $req->idLocations)
    //     ->update(['LocationName' => $req->LocationName,'LocationStatus'=>$req->LocationStatus]);
    //     return redirect('admin/list-location');
    // }

    // function deleteLocation($id){
    //     DB::table('locations')
    //     ->where('idLocations', $id)
    //     ->delete();
    //     return redirect('admin/list-location');
    // }

   

}

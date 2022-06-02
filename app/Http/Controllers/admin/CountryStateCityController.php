<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Countrie;
use App\Models\admin\State;
use App\Models\admin\Citie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CountryStateCityController extends Controller
{   
    
    function addNewCountry(){
    return view('admin/add-location');
     }
    function saveCountry(Request $req){
        
        // $validator = Validator::make($req->all(), [
        //     'CountryName' => 'required'
        // ]);
 
        // if ($validator->fails()) {
        //     return redirect('admin/add-location')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // } else {
        $country=new Countrie;
        $country->CountryName=$req->CountryName;
        $country->CountryStatus=$req->CountryStatus;
        $country->save();
        return redirect('admin/list-location');
        //}
    }

    function getLocationList(){
        $data['locations'] = DB::table('countries')
        ->get();
        return view('admin/list-location',$data);
    }

    function editLocation($id){
        $data['locations'] = DB::table('countries')
        ->where('countryId', '=', $id)
        ->first();
        return view('admin/update-location',$data);
    }

    function updateLocation(Request $req){
        DB::table('countries')
        ->where('countryId', $req->countryId)
        ->update([
        'CountryName' => $req->CountryName,
        'CountryStatus' =>$req->CountryStatus]
            );
        return redirect('admin/list-location');
    }

    function deleteLocation($id){
        DB::table('countries')
        ->where('countryId', $id)
        ->delete();
        return redirect('admin/list-location');
    }
}
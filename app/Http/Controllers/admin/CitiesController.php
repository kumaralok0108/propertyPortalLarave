<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Countrie;
use App\Models\admin\State;
use App\Models\admin\Citie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CitiesController extends Controller
{
 
    function GetCountryListOnState(){
        $data['countrylist'] = DB::table('countries')
        ->where('CountryStatus', '=', 1)
        ->get();

        $data['listofstate'] = DB::table('states')
        ->where('StateStatus', '=', 1)
        ->get();

        return view('admin/add-city', $data);
    }

// function listOfState(){
//     $data['listofstate'] = DB::table('states')
//     ->where('StateStatus', '=', 1)
//     ->get();
//     return view('/admin/add-city',  $data);

// }
function saveCities(Request $req){
            
    // $validator = Validator::make($req->all(), [
    //     'CountryName' => 'required'
    // ]);

    // if ($validator->fails()) {
    //     return redirect('admin/add-location')
    //                 ->withErrors($validator)
    //                 ->withInput();
    // } else {

    $cities=new Citie;
    $cities->CityName = $req->CityName;
    $cities->stateId = $req->stateId;
    $cities->CityStatus = $req->CityStatus;
    $cities->save();
    return redirect('/admin/list-city');
// }

}

function getCitiyList(){
    $data['citylist'] = DB::table('cities')
    ->join('states', 'states.stateId', '=', 'cities.stateId')
    ->get();
    
    return view('/admin/list-city', $data);

}

function deleteCities($id){
    DB::table('cities')
    ->where('Cityid', $id)
    ->delete();
    return redirect('/admin/list-city');
}

function editCities($id)
{
    $data['citiesdata']= DB::table('cities')
    ->where('Cityid', '=', $id)
    //->join('countries', 'countries.countryId', '=', 'states.countryId')
    ->join('states', 'states.stateId', '=', 'cities.stateId')

    ->first();

    // $data['countrieslist'] = DB::table('countries')
    // ->get();

    $data['listofstate'] = DB::table('states')
    ->get();

    return view('/admin/update-city', $data);
}

function updateCities(Request $req)
{
    DB::table('cities')
    ->where('Cityid', $req->stateId)
   ->update([
    'CityName' => $req->CityName,
    'stateId' => $req->stateId,
    'CityStatus' => $req->CityStatus

   ]);

    return redirect('/admin/list-city');
}

// On changes Country and state 
function getStateByCountry($id){
    //echo $id;
    $getState = DB::table('states')
    ->where('countryId', '=', $id)
    ->get();
    $state_list="<option>Select State</option>";
    if($getState){
        foreach($getState as $state){
            $state_list.="<option value='".$state->stateId."'>".$state->StateName."</option>";
        }
    }
 echo json_encode(array('state'=>$state_list));
    //return response()->json($getState);    
}
}


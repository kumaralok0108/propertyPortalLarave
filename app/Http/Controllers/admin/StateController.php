<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Countrie;
use App\Models\admin\State;
use App\Models\admin\Citie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StateController extends Controller
{
    function GetCountryListOnState(){
        $data['countrlist'] = DB::table('countries')
        ->where('CountryStatus', '=', 1)
        ->get();
        return view('admin/add-state', $data);
    }
    // function addNewState(){
    //     return view('admin/add-state');
    //      }
        function saveState(Request $req){
            
            // $validator = Validator::make($req->all(), [
            //     'CountryName' => 'required'
            // ]);
     
            // if ($validator->fails()) {
            //     return redirect('admin/add-location')
            //                 ->withErrors($validator)
            //                 ->withInput();
            // } else {
            $state=new State;
            $state->StateName = $req->StateName;
            $state->countryId = $req->countryId;
            $state->StateStatus = $req->StateStatus;
            $state->save();
            return redirect('admin/list-state');
       //}
        }
        function getStateList()
        {
            $data['stateslist'] = DB::table('states')
            ->join('countries', 'countries.countryId', '=', 'states.countryId')
            ->get();
            return view('admin/list-state', $data);
        }
        function deleteState($id){
            DB::table('states')
            ->where('stateId', $id)
            ->delete();
            return redirect('admin/list-state');
        }
        
        function updateState($id){
            $data['upstateslist'] = DB::table('states')
            ->join('countries', 'countries.countryId', '=', 'states.countryId')
            ->where('stateId', '=', $id)
            ->first();

            $data['countrieslist'] = DB::table('countries')
            ->get();
            return view('admin/update-state', $data);
        }
        
        function updateStatebyId(Request $req)
        {
            DB::table('states')
            ->where('stateId', $req->stateId)
            ->update([
            'countryId' => $req->countryId,
            'StateName'=>$req->StateName,
            'StateName'=>$req->StateName
        ]);
            return redirect('admin/list-state'); 
        }
}

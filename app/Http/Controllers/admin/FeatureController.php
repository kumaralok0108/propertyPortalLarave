<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Feature;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FeatureController extends Controller
{
    function addNewFeature(){
        return view('/admin/add-feature');
    }

    function saveFeature(Request $req){
        $feature=new Feature;
        $feature->FeaturesName=$req->FeaturesName;
        $feature->FeaturesStatus=$req->FeaturesStatus;
        $feature->save();
        return redirect('/admin/list-feature');
    }

    function getFeatureList(){
        $data['Features'] = DB::table('Features')
        ->get();
        return view('/admin/list-feature',$data);
    }

    function editFeature($id){
        $data['Features'] = DB::table('Features')
        ->where('idFeatures', '=', $id)
        ->first();
        return view('/admin/update-feature',$data);
  
    }
    function updateFeature(Request $req){
         DB::table('Features')
         ->where('idFeatures', $req->idFeatures)
         ->update(['FeaturesName' => $req->FeaturesName,
         'FeaturesStatus'=> $req->FeaturesStatus]);
         return redirect('admin/list-feature');
    }
    function deleteFeature($id){
            DB::table('Features')
            ->where('idFeatures', $id)
            ->delete();
            return redirect('/admin/list-feature');
    }
}

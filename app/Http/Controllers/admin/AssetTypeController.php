<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Asset_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AssetTypeController extends Controller
{
    function addAssetType(){
        return view('admin/add-asset-type');
    }
    function saveAsset(Request $req){
        $asset_type=new Asset_type;
        $asset_type->AssetName=$req->AssetName;
        $asset_type->AssetStatus=$req->AssetStatus;
        $asset_type->save();
        return redirect('admin/list-asstet-type');
    }
    function getAssetsTypeList(){
        $data['asset_types'] = DB::table('asset_types')
        ->get();
        return view('admin/list-asstet-type',$data);
    }
    function editAssetsType($id){
        $data['asset_types'] = DB::table('asset_types')
        ->where('idAssetType', '=', $id)
        ->first();
        return view('admin/update-asstet-type',$data);
      
    }

    function updateAssetsType(Request $req){
         DB::table('asset_types')
         ->where('idAssetType', $req->idAssetType)
         ->update(['AssetName' => $req->AssetName,'AssetStatus'=>$req->AssetStatus]);
         return redirect('admin/list-asstet-type');
    }

    function deleteAssetsType($id){
            DB::table('asset_types')
            ->where('idAssetType', $id)
            ->delete();
            return redirect('admin/list-asstet-type');

    }

}

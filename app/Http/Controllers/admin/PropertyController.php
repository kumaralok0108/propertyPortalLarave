<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Property_type;
use App\Models\admin\Asset_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    function getPropertyType(){
        $data['assettype'] = DB::table('asset_types')
        ->where('AssetStatus', '=', 1)
        ->get();
        return view('admin/add-property-type',$data);
    }
    function savePropertyType(Request $req){
        $validator = Validator::make($req->all(), [
              'PropertyTypeName' => 'required',
          
        ]);
 
        if ($validator->fails()) {
            return redirect('admin/add-property-type')
            ->withErrors($validator)
            ->withInput();
        } else {
        $property_type =new Property_type;
        $property_type->idAssetType=$req->idAssetType;
        $property_type->PropertyTypeName=$req->PropertyTypeName;
        $property_type->PropertyTypeStatus=$req->PropertyTypeStatus;
        $property_type->save();
        return redirect('admin/list-property-type');
        }
    }

     function getPropertyTypeList(){
        $data['property_type_list'] = DB::table('property_types')
        ->join('asset_types', 'property_types.idAssetType', '=', 'asset_types.idAssetType')
        ->get();
        return view('admin/list-property-type',$data);
    }

    function editPropertyListType($id){
        $data['property_type_list'] = DB::table('property_types')
        ->join('asset_types', 'property_types.idAssetType', '=', 'asset_types.idAssetType')
        ->where('idPropertyType', '=', $id)
        ->first();

        $data['getasset_types'] = DB::table('asset_types')
        ->get();
        return view('admin/update-propertytype',$data);
    }

    function updatePropertyType(Request $req){
        $validator = Validator::make($req->all(), [
            'idAssetType' => 'required',
            'PropertyTypeName' => 'required',
            'PropertyTypeStatus' => 'required'
        ]);
 
        if ($validator->fails()) {
            return redirect('admin/add-property-type')
            ->withErrors($validator)
            ->withInput();
        } else {
        DB::table('property_types')
        ->where('idPropertyType', $req->idPropertyType)
        ->update([
        'idAssetType' => $req->idAssetType,
        'PropertyTypeName'=>$req->PropertyTypeName,
        'PropertyTypeStatus'=>$req->PropertyTypeStatus
    ]);
        return redirect('admin/list-property-type');
        }
    }

    function deletePropertyType($id){
        DB::table('property_types')
        ->where('idPropertyType',$id)
        ->delete();
        return redirect('admin/list-property-type');
    }


}

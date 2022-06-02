<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\Propertylist;
use App\Models\frontend\admin\Asset_type;
use App\Models\frontend\admin\Property_type;
use App\Models\frontend\admin\Location;
use App\Models\frontend\admin\Countrie;
use App\Models\frontend\admin\State;
use App\Models\frontend\admin\Citie;
use App\Models\frontend\Data_images;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;

class ResidentialController extends Controller
{
    function getAllList(){
        $data['locationList'] = DB::table('locations')
        ->where('LocationStatus', '=', 1)
        ->get();
        
       $data['locationList'] = DB::table('countries')
       ->where('CountryStatus', '=', 1)
       ->get();

       $data['statesList'] = DB::table('states')
       ->where('StateStatus', '=', 1)
       ->get();

       $data['citiesList'] = DB::table('cities')
       ->where('CityStatus', '=', 1)
       ->get();

        $data['assettypeList'] = DB::table('asset_types')
        ->where('AssetStatus', '=', 1)
        ->get();
        
        $data['propertyListtype'] = DB::table('property_types')
        ->where('PropertyTypeStatus', '=', 1)
        ->get();

        $data['featureslist'] = DB::table('features')
        ->where('FeaturesStatus', '=', 1)
        ->get();
        
        return view('/frontend/residential', $data);
    }


    function getResidenPropertiesList(){
        // $propertylists = DB::table('propertylists')->paginate(8);
        $data['propertylists'] = DB::table('propertylists')
        ->join('asset_types', 'propertylists.idAssetType', '=', 'asset_types.idAssetType')
        ->join('property_types', 'propertylists.idPropertyType', '=', 'property_types.idPropertyType')
        //->join('locations', 'propertylists.idLocation', '=', 'locations.idLocations')
        ->join('features', 'propertylists.idFeatures', '=', 'features.idFeatures')
        ->join('countries', 'propertylists.countryId', '=', 'countries.countryId')
        ->join('states', 'propertylists.stateId', '=', 'states.stateId')
        ->join('cities', 'propertylists.Cityid', '=', 'cities.Cityid')
       // ->join('data_imagess', 'propertylists.idPropertyList', '=', 'data_imagess.idPropertyList')
       ->select()
       ->paginate(6, 'propertylists.*');
      // ->get();
        //$data['url'] = Storage::url('file.jpg');
        return view('/frontend/residential',$data);
    }
   
    function getResidenPropertiesGridView(){
        $data['propertylists'] = DB::table('propertylists')
        ->join('asset_types', 'propertylists.idAssetType', '=', 'asset_types.idAssetType')
        ->join('property_types', 'propertylists.idPropertyType', '=', 'property_types.idPropertyType')
       // ->join('locations', 'propertylists.idLocation', '=', 'locations.idLocations')
        ->join('features', 'propertylists.idFeatures', '=', 'features.idFeatures')
        ->join('countries', 'propertylists.countryId', '=', 'countries.countryId')
        ->join('states', 'propertylists.stateId', '=', 'states.stateId')
        ->join('cities', 'propertylists.Cityid', '=', 'cities.Cityid')
       // ->join('data_imagess', 'propertylists.idPropertyList', '=', 'data_imagess.idPropertyList')
        ->get();
        //$data['url'] = Storage::url('file.jpg');
        return view('/frontend/properties-list',$data);
    }

    function detailResidentialProperty($id){
        $data['propertylists'] = DB::table('propertylists')
        ->where('idPropertyList', $id)
        ->join('asset_types', 'propertylists.idAssetType', '=', 'asset_types.idAssetType')
       // ->join('locations', 'propertylists.idLocation', '=', 'locations.idLocations')
        ->join('property_types', 'propertylists.idPropertyType', '=', 'property_types.idPropertyType')
        ->join('features', 'propertylists.idFeatures', '=', 'features.idFeatures')
        ->join('countries', 'propertylists.countryId', '=', 'countries.countryId')
        ->join('states', 'propertylists.stateId', '=', 'states.stateId')
        ->join('cities', 'propertylists.Cityid', '=', 'cities.Cityid')
        //->join('data_imagess', 'propertylists.idPropertyList', '=', 'data_imagess.idPropertyList')
        ->get();

        return view('/frontend/single-property', $data);
    }

    
    function getHomePropertiesGridView(){
        $data['propertylists'] = DB::table('propertylists')
        //->where('idPropertyList', $id)
        ->join('asset_types', 'propertylists.idAssetType', '=', 'asset_types.idAssetType')
       // ->join('locations', 'propertylists.idLocation', '=', 'locations.idLocations')
        ->join('property_types', 'propertylists.idPropertyType', '=', 'property_types.idPropertyType')
        ->join('features', 'propertylists.idFeatures', '=', 'features.idFeatures')
        ->join('countries', 'propertylists.countryId', '=', 'countries.countryId')
        ->join('states', 'propertylists.stateId', '=', 'states.stateId')
        ->join('cities', 'propertylists.Cityid', '=', 'cities.Cityid')
        
        ->get();

        return view('/frontend/home', $data);
    }



}

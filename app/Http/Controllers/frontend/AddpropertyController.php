<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\Propertylist;
use App\Models\frontend\Property_feature;
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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;



//use App\Upload;

class AddpropertyController extends Controller
{

    function getLocationList(){
        // $data['locationList'] = DB::table('locations')
        // ->where('LocationStatus', '=', 1)
        // ->get();

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
        
        return view('/frontend/add-property', $data);
    }
     // Save record into DB 
    function saveProperty(Request $req)
    {
        $validator = Validator::make($req->all(),
        [
             // 'idLocation' => 'required',
            //  'idAssetType' => 'required',
            //   'idPropertyType' => 'required',    
            //   'NumberOfBedrooms' => 'required',  
            //   'NumberOfRooms' => 'required',
            //   'NumberOfBathroom' => 'required', 
            //   'Address' => 'required',  
            //   'AddressLat' => 'required',  
            //   'AddressLon' => 'required',  
            //   'Description' => 'required',  
            //   'ShortLet' => 'required',  
            //   'LongLet' => 'required',  
            //   'ShortLetPrice' => 'required',    
            //   'LongLetPrice' => 'required',  
            //   'VideoLink' => 'required',    
            //   'idUsers' => 'required',
                 
        ]);
        if ($validator->fails()) {
            return redirect('frontend/add-property')
            ->withErrors($validator)
            ->withInput();
        } else {
        
        $propertylist=new Propertylist;
        $propertylist->Title=$req->Title;
        $propertylist->countryId=$req->countryId;
        $propertylist->stateId=$req->stateId;
        $propertylist->Cityid=$req->Cityid;
        $propertylist->idAssetType=$req->idAssetType;
        $propertylist->idPropertyType=$req->idPropertyType;
        $propertylist->NumberOfBedrooms=$req->NumberOfBedrooms;
        $propertylist->NumberOfRooms=$req->NumberOfRooms;
        $propertylist->NumberOfBathroom=$req->NumberOfBathroom;
        $propertylist->Address=$req->Address;
        $propertylist->NearestPoint=$req->NearestPoint;
        $propertylist->AddressLat=$req->AddressLat;
        $propertylist->AddressLon=$req->AddressLon;
        $propertylist->Description=$req->Description;
        $propertylist->ShortLet=$req->ShortLet;
        $propertylist->LongLet=$req->LongLet;
        $propertylist->ShortLetPrice=$req->ShortLetPrice;
        $propertylist->LongLetPrice=$req->LongLetPrice;
        $propertylist->VideoLink=$req->VideoLink;
        $propertylist->idUsers=$req->idUsers;
        
        $propertylist->save();
        $idPropertyList = $propertylist->id;
        $idPropertyFeatures=$req->idPropertyFeatures; //
       
        foreach($idPropertyFeatures as $idProperty){
            $Property_feature=new Property_feature;
            $Property_feature->idPropertyList=$idPropertyList;
            $Property_feature->idFeatures=$idProperty;
            $Property_feature->save();
        }
		
        $uploadedFile = $req->file('Images_Name');
        $image_no=1;
        foreach($uploadedFile as $file){
        $filename = time().'_'.$file->getClientOriginalName();
        $path = Storage::disk('public')->putFileAs('files',$file,$filename);
        //File::get($uploadedFile);
                if( $image_no==1){
                    $propertylist->where('idPropertyList', $idPropertyList)->update(array('thumb' =>  $filename));
                }
                 $propertylist = new Data_images;
                 $propertylist->Images_Name = $filename;
                 $propertylist->idPropertyList = $idPropertyList;
                 $propertylist->Images_Path = $path;
                 $propertylist->save();
                 $image_no++;
        }  

        return redirect('frontend/property-list');
       }
    }

    // list property  function  
    function getPropertiesList(){
        $data['propertylists'] = DB::table('propertylists')
        ->join('asset_types', 'propertylists.idAssetType', '=', 'asset_types.idAssetType')
        //->join('locations', 'propertylists.idLocation', '=', 'locations.idLocations')
        ->join('countries', 'propertylists.countryId', '=', 'countries.countryId')
        ->join('states', 'propertylists.stateId', '=', 'states.stateId')
        ->join('cities', 'propertylists.Cityid', '=', 'cities.Cityid')
        ->orderByDesc('propertylists.idPropertyList')
        ->select()
        ->paginate(6, 'propertylists.*');
       // ->get();
        //$data['url'] = Storage::url('file.jpg');
        return view('frontend/property-list',$data);
    }
   
  // Detail property List Function by Property ID :

function detailProperty($id){
    $data['propertylists'] = DB::table('propertylists')
    ->where('idPropertyList', $id)
    ->join('asset_types', 'propertylists.idAssetType', '=', 'asset_types.idAssetType')
    //->join('locations', 'propertylists.idLocation', '=', 'locations.idLocations')
    ->join('countries', 'propertylists.countryId', '=', 'countries.countryId')
    ->join('states', 'propertylists.stateId', '=', 'states.stateId')
    ->join('cities', 'propertylists.Cityid', '=', 'cities.Cityid')
    ->join('property_types', 'propertylists.idPropertyType', '=', 'property_types.idPropertyType')
    // ->join('data_imagess', 'propertylists.idPropertyList', '=', 'data_imagess.idPropertyList')
    ->get();
    return view('/frontend/property-detail-list', $data);
}

/**  Delete data form Single table */ 
    // function deletePropertyListItem($id){
    //     DB::table('propertylists')
    //     ->where('idPropertyList', $id)
    //     //->join('data_imagess', 'propertylists.idPropertyList', '=', 'data_imagess.idPropertyList')
    //     ->delete();
    //     return redirect('/frontend/property-list');
    // }

    // Delete tabel data form Multiple table::

    function deletePropertyListItem($id){
        DB::table('propertylists')->where('idPropertyList', $id)->delete();
        DB::table('data_imagess')->where('idPropertyList', $id)->delete();
        return redirect('/frontend/property-list');
    }
    
    function editProperty($id){
        $data['getPropertyDetailsById'] = DB::table('propertylists')
        ->where('idPropertyList', $id)
      //  ->join('asset_types', 'propertylists.idAssetType', '=', 'asset_types.idAssetType')
        //->join('locations', 'propertylists.idLocation', '=', 'locations.idLocations')
       // ->join('features', 'propertylists.idFeatures', '=', 'features.idFeatures')
      //  ->join('countries', 'propertylists.countryId', '=', 'countries.countryId')
       // ->join('states', 'propertylists.stateId', '=', 'states.stateId')
      //  ->join('cities', 'propertylists.Cityid', '=', 'cities.Cityid')
       // ->join('property_types', 'propertylists.idPropertyType', '=', 'property_types.idPropertyType')
        ->first();
       // print_r($data['getPropertyDetailsById']);die;
        $countryId= $data['getPropertyDetailsById']->countryId;
        $stateId=$data['getPropertyDetailsById']->stateId;
        
        $data['getasset_types'] = DB::table('asset_types')
        ->get();

        // $data['locationList'] = DB::table('locations')
        // ->get();
        
        $data['countriesList'] = DB::table('countries')
        ->get();

        $data['statesList'] = DB::table('states')
        ->where('countryId', $countryId)
        ->get();

        $propertyfeature = DB::table('property_features')
        ->where('idPropertyList', $data['getPropertyDetailsById']->idPropertyList )
        ->get();
		
        $idFeatures=array();
        foreach($propertyfeature as $featureid){
            $idFeatures[]=$featureid->idFeatures;
        }
        $data['idFeatures']=$idFeatures;
       // print_r($data['propertyfeature']);die;
        $data['citiesList'] = DB::table('cities')
        ->where('stateId', $stateId)
        ->get();

        $data['propertyListtype'] = DB::table('property_types')
        ->get();

        $data['featureslist'] = DB::table('features')
        ->get();

       

        return view('/frontend/update-property', $data);
    }

    function updateProperty(Request $req){
        DB::table('propertylists')
        ->where('idPropertyList', $req->idPropertyList)
        ->update([
        'Title' =>$req->Title,
       // 'idLocation' => $req->idLocation,
        'countryId' => $req->countryId,
        'stateId' => $req->stateId,
        'Cityid' => $req->Cityid,
        'idAssetType' => $req->idAssetType,
        'idPropertyType' => $req->idPropertyType,
       // 'idFeatures' => $req->idFeatures,
        'NumberOfBedrooms' => $req->NumberOfBedrooms,
        'NumberOfRooms' => $req->NumberOfRooms,
        'NumberOfBathroom' => $req->NumberOfBathroom,
        'Address' => $req->Address,
        'Address' => $req->NearestPoint,        
        'AddressLat' => $req->AddressLat,
        'AddressLon' => $req->AddressLon,
        'Description' => $req->Description,
        'ShortLet' => $req->ShortLet,
        'LongLet' => $req->LongLet,
        'ShortLetPrice' => $req->ShortLetPrice,
        'LongLetPrice' => $req->LongLetPrice,
        'VideoLink' => $req->VideoLink,
        'idUsers' => $req->idUsers
    ]);

    $idPropertyFeatures=$req->idPropertyFeatures;
    DB::table('property_features')->where('idPropertyList', $req->idPropertyList)->delete();
    foreach($idPropertyFeatures as $idProperty){
        $Property_feature=new Property_feature;
        $Property_feature->idPropertyList=$req->idPropertyList;
        $Property_feature->idFeatures=$idProperty;
        $Property_feature->save();
    }
        return redirect('/frontend/property-list');
    }

 
    // // File or Images Upload function is here

    //  function uploadImages(Request $req)
    // {
    //     // $validatedData = $request->validate([
    //     //  'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    //     // ]);

    //     $Images_Name = $req->file('Images_Name')->getClientOriginalName();
    //     $Images_Path = $req->file('Images_Path')->store('public/uploads');
    //     $images = new Data_images;
    //     $images->Images_Name = $req->$Images_Name;
    //     $images->Images_Path = $req->$Images_Path;
    //     $images->save();
        
    //     return redirect('frontend/property-list');
    //     //return redirect('image')->with('status', 'Image Has been uploaded successfully with validation in laravel');
    // }

/** On Click function */
    // public function index()
    // {
    //     $data['countries'] = Country::get(["name","id"]);
    //     return view('country-state-city',$data);
    // }
    // public function getState(Request $request)
    // {
    //     $data['states'] = State::where("country_id",$request->country_id)
    //                 ->get(["name","id"]);
    //     return response()->json($data);
    // }
    // public function getCity(Request $request)
    // {
    //     $data['cities'] = City::where("state_id",$request->state_id)
    //                 ->get(["name","id"]);
    //     return response()->json($data);
    // }

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
    
    function getCityByState($id){
        $getCity = DB::table('cities')
        ->where('stateId', '=', $id)
        ->get();
        $city_list="<option>Select City</option>";
        if($getCity){
            foreach($getCity as $city){
                $city_list.="<option value='".$city->Cityid."'>".$city->CityName."</option>";
            }
        }
     echo json_encode(array('city'=>$city_list));
             
    }
}


<?php
  use PHPMailerPHPMailerPHPMailer;
  use PHPMailerPHPMailerException;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'your_email@gmail.com';
      // Gmail Password
      $mail->Password = 'Your Gmail Password';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('your_email@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('recipient_email@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thankyou! for contacting us, We'll get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>
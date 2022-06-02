<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\admin\LocationsController;
use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\admin\FeatureController;
use App\Http\Controllers\admin\AssetTypeController;
use App\Http\Controllers\frontend\AddpropertyController;
use App\Http\Controllers\frontend\ResidentialController;
use App\Http\Controllers\frontend\CommercialController; 
use App\Http\Controllers\admin\CountryStateCityController;
use App\Http\Controllers\admin\StateController;
use App\Http\Controllers\admin\CitiesController;
use App\Http\Controllers\frontend\ImagesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/frontend/home');
});

// Route::get('/frontend/residential', function () {
//     return view('frontend/residential');
// });

Route::get('/admin/add-city', function () {
    return view('/admin/add-city');
});

// Route::get('/frontend/property-Comm-list-girdview', function () {
//     return view('/frontend/property-Comm-list-girdview');
// });


// Route::get('/frontend/commercial', function () {
//     return view('frontend/commercial');
// });

Route::get('/frontend/agents-listing-grid', function () {
    return view('/frontend/agents-listing-grid');
});

Route::get('/frontend/contact-us', function () {
    return view('/frontend/contact-us');
});

Route::get('/frontend/user-profile', function () {
    return view('/frontend/user-profile');
});

Route::get('/frontend/user-change-password', function () {
    return view('/frontend/change-password');
});

Route::get('/add-users', function () {
    return view('/admin/add-users');
});

Route::get('/list-users', function () {
    return view('/admin/list-users');
});

Route::get('/admin', function () {
    return view('admin/login');
});

Route::get('/admin', function () {
    return view('admin/admin-dashbord');
})->middleware('auth', 'isAdmin');

Auth::routes();

// Route::get('/admin', function () {
// return view('/admin/admin-dashbord');
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/frontend/user-dashboard', [App\Http\Controllers\HomeController::class, 'index'])
->name('/frontend/user-dashboard')->middleware('auth', 'isUser');;

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])
// ->name('/admin/admin-dashbord');

Route::post('/admin/savepropertytype',[PropertyController::class,'savePropertyType'])->middleware('auth', 'isAdmin');
Route::get('/admin/add-property-type', [PropertyController::class,'getPropertyType'])->middleware('auth', 'isAdmin');

Route::get('/admin/list-property-type', [PropertyController::class,'getPropertyTypeList'])->middleware('auth', 'isAdmin');
Route::get('/admin/edit-list-type/{id}', [PropertyController::class,'editPropertyListType'])->middleware('auth', 'isAdmin');

Route::post('/admin/updatepropertytype',[PropertyController::class,'updatePropertyType'])->middleware('auth', 'isAdmin');
Route::get('/admin/deletepropertytype/{id}',[PropertyController::class,'deletePropertyType'])->middleware('auth', 'isAdmin');

/** Location routs start here */ 

// Route::get('/admin/add-location',[LocationsController::class,'addNewLocation'])->middleware('auth', 'isAdmin');
// Route::post('/admin/savelocation',[LocationsController::class,'saveLocation'])->middleware('auth', 'isAdmin');
// Route::get('/admin/list-location',[LocationsController::class,'getLocationList'])->middleware('auth', 'isAdmin');
// Route::get('/admin/editlocation/{id}',[LocationsController::class,'editLocation'])->middleware('auth', 'isAdmin');
// Route::post('admin/updatelocation',[LocationsController::class,'updateLocation'])->middleware('auth', 'isAdmin');
// Route::get('/admin/deletelocation/{id}',[LocationsController::class,'deleteLocation'])->middleware('auth', 'isAdmin');

Route::get('/admin/add-location',[CountryStateCityController::class,'addNewCountry'])->middleware('auth', 'isAdmin');
Route::post('/admin/savecountry',[CountryStateCityController::class,'saveCountry'])->middleware('auth', 'isAdmin');
Route::get('/admin/list-location',[CountryStateCityController::class,'getLocationList'])->middleware('auth', 'isAdmin');
Route::get('/admin/editlocation/{id}',[CountryStateCityController::class,'editLocation'])->middleware('auth', 'isAdmin');
Route::post('admin/updatelocation',[CountryStateCityController::class,'updateLocation'])->middleware('auth', 'isAdmin');
Route::get('/admin/deletelocation/{id}',[CountryStateCityController::class,'deleteLocation'])->middleware('auth', 'isAdmin');

//Route::get('/admin/add-state',[StateController::class,'addNewState'])->middleware('auth', 'isAdmin');
Route::get('/admin/add-state',[StateController::class,'GetCountryListOnState'])->middleware('auth', 'isAdmin');
Route::post('/admin/savestate',[StateController::class,'saveState'])->middleware('auth', 'isAdmin');
Route::get('/admin/list-state',[StateController::class,'getStateList'])->middleware('auth', 'isAdmin');
Route::get('/admin/deletestate/{id}',[StateController::class,'deleteState'])->middleware('auth', 'isAdmin');
Route::get('/admin/updatestate/{id}',[StateController::class,'updateState'])->middleware('auth', 'isAdmin');
Route::post('/admin/updatestatebyid',[StateController::class,'updateStatebyId'])->middleware('auth', 'isAdmin');

//Route::get('/admin/add-city',[StateController::class,'GetCountryListOnState'])->middleware('auth', 'isAdmin');
Route::get('/admin/add-city',[CitiesController::class,'GetCountryListOnState'])->middleware('auth', 'isAdmin');
Route::post('/admin/savecities',[CitiesController::class,'saveCities'])->middleware('auth', 'isAdmin');
Route::get('/admin/list-city',[CitiesController::class,'getCitiyList'])->middleware('auth', 'isAdmin');
Route::get('/admin/deletecities/{id}',[CitiesController::class,'deleteCities'])->middleware('auth', 'isAdmin');
Route::get('/admin/editcities/{id}',[CitiesController::class,'editCities'])->middleware('auth', 'isAdmin');
Route::post('/admin/updatecities',[CitiesController::class,'updateCities'])->middleware('auth', 'isAdmin');

Route::get('/admin/get-state-city-by-country/{id}',[CitiesController::class,'getStateByCountry'])->middleware('auth', 'isAdmin');
Route::get('/admin/get-state-by-country/{id}', [CitiesController::class,'getStateByCountry'])->middleware('cors');


/** Location routs end here */ 

Route::get('/admin/add-feature',[FeatureController::class,'addNewFeature'])->middleware('auth', 'isAdmin');
Route::post('/admin/savefeature',[FeatureController::class,'saveFeature'])->middleware('auth', 'isAdmin');
Route::get('/admin/list-feature',[FeatureController::class,'getFeatureList'])->middleware('auth', 'isAdmin');
Route::get('/admin/editfeature/{id}', [FeatureController::class,'editFeature'])->middleware('auth', 'isAdmin');
Route::get('/admin/deletefeature/{id}', [FeatureController::class,'deleteFeature'])->middleware('auth', 'isAdmin');
Route::post('admin/updatefeature',[FeatureController::class,'updateFeature'])->middleware('auth', 'isAdmin');

Route::get('/admin/add-asset-type', [AssetTypeController::class,'addAssetType'])->middleware('auth', 'isAdmin');
Route::post('/admin/saveasset',[AssetTypeController::class,'saveAsset'])->middleware('auth', 'isAdmin');
Route::get('/admin/list-asstet-type',[AssetTypeController::class,'getAssetsTypeList'])->middleware('auth', 'isAdmin');
Route::get('/admin/editassetstype/{id}',[AssetTypeController::class,'editAssetsType'])->middleware('auth', 'isAdmin');
Route::get('/admin/deleteassetstype/{id}',[AssetTypeController::class,'deleteAssetsType'])->middleware('auth', 'isAdmin');
Route::post('admin/updateassetstype',[AssetTypeController::class,'updateAssetsType'])->middleware('auth', 'isAdmin');

Route::get('/frontend/add-property', [AddpropertyController::class,'getLocationList'])->middleware('auth','isUser');
Route::post('/frontend/saveproperty',[AddpropertyController::class,'saveProperty'])->middleware('auth','isUser');
Route::get('/frontend/property-list', [AddpropertyController::class,'getPropertiesList'])->middleware('auth','isUser');
Route::get('/frontend/deletepropertylistitem/{id}',[AddpropertyController::class,'deletePropertyListItem'])->middleware('auth','isUser');
Route::get('/frontend/property-detail-list/{id}', [AddpropertyController::class,'detailProperty'])->middleware('auth','isUser');
Route::get('/frontend/editproperty/{id}', [AddpropertyController::class,'editProperty'])->middleware('auth','isUser');
Route::post('/frontend/updateproperty', [AddpropertyController::class,'updateProperty'])->middleware('auth','isUser');

Route::get('/frontend/residential', [ResidentialController::class,'getResidenPropertiesList']);
Route::get('/frontend/properties-list', [ResidentialController::class,'getResidenPropertiesGridView']);
Route::get('/frontend/single-property/{id}', [ResidentialController::class,'detailResidentialProperty']);


Route::get('/', [ResidentialController::class,'getHomePropertiesGridView']);

Route::get('/frontend/commercial', [CommercialController::class,'getCommercialPropertiesList']);
Route::get('/frontend/property-Comm-list-girdview', [CommercialController::class,'getCommPropertiesGridView']);

Route::get('/frontend/get-state-by-country/{id}', [AddpropertyController::class,'getStateByCountry'])->middleware('cors');
Route::get('/frontend/get-city-by-state/{id}', [AddpropertyController::class,'getCityByState'])->middleware('cors');

Route::get('/frontend/get-update-state-by-country/{id}', [AddpropertyController::class,'getStateByCountry'])->middleware('cors');
Route::get('/frontend/get-update-city-by-state/{id}', [AddpropertyController::class,'getCityByState'])->middleware('cors');


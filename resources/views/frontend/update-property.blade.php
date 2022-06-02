<x-left-menu />
<div class="single-add-property">

    <h3>Property description and price</h3>
    <div class="property-form-group">
        <form method="POST" action="/frontend/updateproperty" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="idPropertyList" value="{{$getPropertyDetailsById->idPropertyList }}">
            <div class="row">
                {{-- <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="idLocation" name="idLocation">
                            <option value="" class="option"><span class="current">Location</option>
                            @foreach ($locationList as $locations)
                                <option value="{{ $locations->idLocations }}"
                                    @if ($locations->idLocations == $getPropertyDetailsById->idLocation) selected @endif>{{ $locations->LocationName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="countryId" name="countryId">
                            <option value="" class="option"><span class="current">Select Country</option>
                            @foreach ($countriesList as $country)
                                <option value="{{ $country->countryId }}"
                                     @if ($country->countryId == $getPropertyDetailsById->countryId) selected @endif>{{ $country->CountryName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="stateId" name="stateId">
                            <option value="" class="option"><span class="current">Select State</option>
                            @foreach ($statesList as $states)
                                <option value="{{ $states->stateId }}"@if ($states->stateId == $getPropertyDetailsById->stateId) selected @endif>{{ $states->StateName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="Cityid" name="Cityid">
                            <option value="" class="option"><span class="current">Select City</option>
                            @foreach ($citiesList as $city)
                                <option value="{{ $city->Cityid }}" @if($city->Cityid==$getPropertyDetailsById->Cityid) selected @endif>{{ $city->CityName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="idPropertyType" name="idPropertyType">
                            <option value="" class="option"><span class="current">Property Type</option>
                            @foreach ($propertyListtype as $property)
                                <option value="{{ $property->idPropertyType }}"
                                    @if ($property->idPropertyType == $getPropertyDetailsById->idPropertyType) selected @endif>
                                    {{ $property->PropertyTypeName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="dPropertyList" name="idAssetType">
                            <option value="" class="option"><span class="current">Select Asset Type
                            </option>
                            @foreach ($getasset_types as $assetlist)
                                <option value="{{ $assetlist->idAssetType }}"
                                    @if ($assetlist->idAssetType == $getPropertyDetailsById->idAssetType) selected @endif>{{ $assetlist->AssetName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="idLocation" name="idFeatures[]" multiple="multiple">
                            <option value="" class="option"><span class="current">Select Features</option>
                            @foreach ($featureslist as $feature)
                                <option value="{{ $feature->idFeatures }}"
                                    @if ($feature->idFeatures == $getPropertyDetailsById->idFeatures) selected @endif>{{ $feature->FeaturesName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}

            </div>
            <div class="filter-tags-wrap">
                          
            </div>
            <div class="single-add-property">
                <h3>Update Property Features</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-md-12"> 
                            <ul class="pro-feature-add pl-0">
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            @foreach ($featureslist as $feature)
                                            <input id="check-a{{$feature->idFeatures}}" type="checkbox"  name="idPropertyFeatures[]" value="{{ $feature->idFeatures }}" @if (in_array($feature->idFeatures, $idFeatures)) checked @endif/>
                                            <label for="check-a{{$feature->idFeatures}}">{{ $feature->FeaturesName }}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group categories">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <p>
                            <label for="address">Number of bedrooms</label>
                            <input type="text" name="NumberOfBedrooms" value="{{$getPropertyDetailsById->NumberOfBedrooms}}"
                                id="NumberOfBedrooms">
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <p>
                            <label for="city">Number of rooms</label>
                            <input type="text" name="NumberOfRooms" value="{{$getPropertyDetailsById->NumberOfRooms}}">
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <p>
                            <label for="state">Number of bathroom</label>
                            <input type="text" name="NumberOfBathroom" value="{{$getPropertyDetailsById->NumberOfBathroom}}"
                                id="NumberOfBathroom">
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="Address">Address</label>
                        <input type="text" name="Address" id="Address" value="{{$getPropertyDetailsById->Address}}">

                    </p>
                    <p>
                        <label for="NearestPoint">Nearest Point</label>
                        <input type="text" name="NearestPoint" value="{{$getPropertyDetailsById->NearestPoint}}" id="NearestPoint">
                    </p>
                    <p>
                        <label for="Address">Address Lat</label>
                        <input type="text" name="AddressLat" id="AddressLat" value="{{$getPropertyDetailsById->AddressLat}}">

                    </p>
                    <p>
                        <label for="Address">Address Lon</label>
                        <input type="text" name="AddressLon" id="AddressLon" value="{{$getPropertyDetailsById->AddressLon}}">

                    </p>
                    <p>
                        <label for="Address">Short Let</label>
                        <input type="text" name="ShortLet" id="ShortLet" value="{{$getPropertyDetailsById->ShortLet}}">
                    </p>

                    <p>
                        <label for="Address">Long Let</label>
                        <input type="text" name="LongLet" id="LongLet" value="{{$getPropertyDetailsById->LongLet}}">
                    </p>

                    <p>
                        <label for="Address">AddressLon</label>
                        <input type="text" name="LongLet" id="LongLet" value="{{$getPropertyDetailsById->LongLet}}">

                    </p>
                    <p>
                        <label for="description">Description</label>
                        <textarea id="Description" name="Description" value="{{$getPropertyDetailsById->Description}}">{{$getPropertyDetailsById->Description}}</textarea>
                    </p>
                    <p>
                        <label for="Address">Video Link</label>
                        <input type="text" name="VideoLink" id="VideoLink" value="{{$getPropertyDetailsById->VideoLink}}">
                        <small class="form-text text-muted">http://www.example.com</small>
                    </p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p class="no-mb">
                        <label for="price">Shor tLet Price</label>
                        <input type="text" name="ShortLetPrice" value="{{$getPropertyDetailsById->ShortLetPrice}}" id="ShortLetPrice">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="price">Long Let Price</label>
                        <input type="text" name="LongLetPrice" value="{{$getPropertyDetailsById->LongLetPrice}}" id="LongLetPrice">
                    </p>
                </div>

                <div class="col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="assettype" name="idUsers">
                            <option value="" class="option"><span class="current">Select User Type
                            </option>
                   <option value="1" @if($getPropertyDetailsById->idUsers==1) selected @endif>Active</option>
                  <option value="2"@if($getPropertyDetailsById->idUsers==2) selected @endif>UnActive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group categories">
                    {{-- <div class="text-center text-primary">
                        Note: Maximum file size limit is 32M<br>
                        A listing is more valuable with good quality images to truly show the beauty of your property
                    </div> --}}
                    <div class="form-group categories">

                        <div class="col-md-12">
                            <label for="Images">Image</label>
                            <input type="file" name="images" class="dropzone" multiple>
                        </div>

                    </div>
                </div>
                <div class="form-group categories">
                    <div class="col-md-12">
                        <p>
                            <a href="#">Are you having trouble with adding a new property? Send us a note and we will
                                call you back.</a>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div class="prperty-submit-button">
                            <button type="submit">Submit Property</button>
                        </div>
                    </div>

                </div>
        </form>
        {{-- <div class="form-group categories">
                <div class="text-center text-primary">
                    Note: Maximum file size limit is 32M<br>
                    A listing is more valuable with good quality images to truly show the beauty of your property
                </div>
                <div class="form-group categories">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/frontend/file-upload" class="dropzone" method="GET"
                                enctype="multipart/form-data">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
        </div> --}}
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- END SECTION USER PROFILE -->

<input type="hidden" id="get_update_state_url" value="{{ env('APP_URL') }}/frontend/get-update-state-by-country">

<input type="hidden" id="get_update_city_url" value="{{ env('APP_URL') }}/frontend/get-update-city-by-state">



<x-left-footer />
<script src="{{ asset('js/get_locations.js') }}" defer></script>

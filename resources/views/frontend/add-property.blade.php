<x-left-menu />
<div class="single-add-property">

    <h3>Property description and price</h3>
    <div class="property-form-group ">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="card-description">{{ $error }}</p>
            @endforeach
        @endif
        <form method="POST" action="/frontend/saveproperty" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-12">
                    <p>
                        <label for="title">Property Title</label>
                        <input type="text" name="Title" id="Title" placeholder="Enter your Title Max-Max 50 characters">
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="countryId" name="countryId">
                            <option value="" class="option"><span class="current">Select Country</option>
                            @foreach ($locationList as $locations)
                                <option value="{{ $locations->countryId }}">{{ $locations->CountryName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="form-control wide" id="stateId" name="stateId">
                            <option value="" class="option"><span class="current">Select State</option>
                        </select>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="form-control wide" id="Cityid" name="Cityid">
                            <option value="" class="option"><span class="current">Select City</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="idPropertyType" name="idPropertyType">
                            <option value="" class="option"><span class="current">Property Type</option>
                            @foreach ($propertyListtype as $property)
                                <option value="{{ $property->idPropertyType }}">
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
                            @foreach ($assettypeList as $assetlist)
                                <option value="{{ $assetlist->idAssetType }}">{{ $assetlist->AssetName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="idLocation" name="idFeatures"
                            multiple="multiple[]">
                            <option value="" class="option"><span class="current">Check Features</option>
                            @foreach ($featureslist as $feature)
                                <option value="{{ $feature->idFeatures }}">{{ $feature->FeaturesName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}
            </div>
            <div class="filter-tags-wrap">
                          
            </div>
            <div class="single-add-property">
                <h3>Property Features</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-md-12"> 
                            <ul class="pro-feature-add pl-0">
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            @foreach ($featureslist as $feature)
                                            <input id="check-a{{$feature->idFeatures}}" type="checkbox"  name="idPropertyFeatures[]" value="{{ $feature->idFeatures }}"/>
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
                            <input type="text" name="NumberOfBedrooms" placeholder="Number of bedrooms"
                                id="NumberOfBedrooms">
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <p>
                            <label for="city">Number of rooms</label>
                            <input type="text" name="NumberOfRooms" placeholder="Number of rooms" id="NumberOfRooms">
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <p>
                            <label for="state">Number of bathroom</label>
                            <input type="text" name="NumberOfBathroom" placeholder="Number of bathroom"
                                id="NumberOfBathroom">
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="Address">Address</label>
                        <input type="text" name="Address" id="Address" placeholder="Enter your Address">
                    </p>
                    <p>
                        <label for="NearestPoint">Nearest Point</label>
                        <input type="text" name="NearestPoint" placeholder="Nearest Point" id="NearestPoint">
                    </p>
                    <p>
                        <label for="Address">Address Lat</label>
                        <input type="text" name="AddressLat" id="lng" placeholder="Enter your Address Lat">
                        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0" id="gmap_canvas"
                            src="https://maps.google.com/maps?width=520&height=400&hl=en&q=phase%208%20+(Mohali)&t=&z=10&ie=UTF8&iwloc=B&output=embed"></iframe>
                        <a href='https://mapswebsite.org/'>embed google maps</a>
                        <script type='text/javascript'
                                                src='https://embedmaps.com/google-maps-authorization/script.js?id=60ad5e1605e407409d27197d91957523f89b6a99'>
                        </script>
                    </p>
                    <p>
                        <label for="Address">Address Lon</label>
                        <input type="text" name="AddressLon" id="AddressLon" placeholder="Enter your Address Lon">

                    </p>
                    <p>
                        <label for="Address">Short Let</label>
                        <input type="text" name="ShortLet" id="ShortLet" placeholder="Enter your Short Let">
                    </p>

                    <p>
                        <label for="Address">Long Let</label>
                        <input type="text" name="LongLet" id="LongLet" placeholder="Enter your Short Let">
                    </p>


                    <p>
                        <label for="description">Description</label>
                        <textarea id="Description" name="Description" placeholder="Describe about your property"></textarea>
                    </p>
                    <p>
                        <label for="Address">Video Link</label>
                        <input type="text" name="VideoLink" id="VideoLink" placeholder="Video Link">
                        <small class="form-text text-muted">http://www.example.com</small>
                    </p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p class="no-mb">
                        <label for="price">Shor tLet Price</label>
                        <input type="text" name="ShortLetPrice" placeholder="Short Let Price" id="ShortLetPrice">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="price">Long Let Price</label>
                        <input type="text" name="LongLetPrice" placeholder="Long Let Price" id="LongLetPrice">
                    </p>
                </div>
                <div class="col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select class="nice-select form-control wide" id="assettype" name="idUsers">
                            <option value="" class="option"><span class="current">Select User Type
                            </option>
                            <option value="1" class="option">Active</option>
                            <option value="2" class="option">UnActive</option>
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
                            <input type="file" name="Images_Name[]" class="dropzone" multiple>
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
                    <div class="col-lg-4 col-md-12">
                        <div class="prperty-submit-button">
                            <button type="submit">Save Property</button>
                        </div>
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

<!-- END SECTION USER PROFILE -->
<input type="hidden" id="get_state_url" value="{{ env('APP_URL') }}/frontend/get-state-by-country">

<input type="hidden" id="get_city_url" value="{{ env('APP_URL') }}/frontend/get-city-by-state">



<x-left-footer />
<script src="{{ asset('js/get_locations.js') }}" defer></script>

<x-left-menu />
<div class="row">
    <div class="col-lg-10">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                </div>
                @foreach ($propertylists as $properties)
                    <h3>Property Detail Pages &nbsp; <a href="/frontend/editproperty/{{ $properties->idPropertyList }}"><i
                                class="fas fa-pencil-alt"></i></a> | <a href="/frontend/add-property"> Add New </a></h3>
            </header>
            <div class="card-body">
                <div class="property-form-group">

                    <div class="row">

                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                            <div class="form-group categories">
                                <label>Country Name</label> &nbsp; : &nbsp; {{ $properties->CountryName }}
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                            <div class="form-group categories">
                                <label>State Name</label> &nbsp; : &nbsp; {{ $properties->StateName }}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                            <div class="form-group categories">
                                <label>City Name</label> &nbsp; : &nbsp; {{ $properties->CityName }}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                            <div class="form-group categories">
                                <label>Property Type</label> &nbsp; : &nbsp; {{ $properties->PropertyTypeName }}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                            <div class="form-group categories">
                                <label> Asset Type</label> &nbsp; : &nbsp; {{ $properties->AssetName }}
                                </td>
                            </div>
                        </div>
                    </div>
                    <div class="form-group categories">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <p>
                                    <label for="address">Number of bedrooms &nbsp; : &nbsp;</label>
                                    <td>{{ $properties->NumberOfBedrooms }}</td>
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <p>
                                    <label for="city">Number of rooms &nbsp; : &nbsp;</label>
                                    <td>{{ $properties->NumberOfRooms }}</td>
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <p>
                                    <label for="state">Number of bathroom &nbsp; : &nbsp;</label>
                                    <td>{{ $properties->NumberOfBathroom }}</td>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <p>
                                <label for="Address">Address &nbsp; : &nbsp;</label>
                                <td>{{ $properties->Address }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p>
                                <label for="Address">Address Lat &nbsp; : &nbsp;</label>
                                <td>{{ $properties->Address }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p>
                                <label for="Address">Address Lon &nbsp; : &nbsp;</label>
                                <td>{{ $properties->AddressLon }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p>
                                <label for="Address">Short Let &nbsp; : &nbsp;</label>
                                <td>{{ $properties->ShortLet }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p>
                                <label for="Address">Long Let &nbsp; : &nbsp;</label>
                                <td>{{ $properties->LongLet }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p>
                                <label for="Address">AddressLon &nbsp; : &nbsp;</label>
                                <td>{{ $properties->AddressLon }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p>
                                <label for="description">Description &nbsp; : &nbsp;</label>
                                <td>{{ $properties->Description }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p>
                                <label for="Address">Video Link &nbsp; : &nbsp;</label>
                                <td>{{ $properties->VideoLink }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p class="no-mb">
                                <label for="price">Short Let Price &nbsp; : &nbsp;</label>
                                <td>{{ $properties->ShortLet }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p class="no-mb last">
                                <label for="price">Long Let Price &nbsp; : &nbsp;</label>
                                <td>{{ $properties->LongLet }}</td>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <p class="no-mb last">
                                <label>House Iamges &nbsp; : &nbsp;</label>
                                <td> <img src="{{env('APP_URL')}}/storage/files/{{$properties->thumb}}"
                                     width="110px" height="48px" alt="{{$properties->thumb}}" /> </td>
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <label for="price">User Type</label>
                            <td>
                                @if ($properties->idUsers == '1')
                                    Active
                                @else
                                    Unactive
                                @endif
                            </td>
                        </div>
                        <td> </td>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <p> <a href="{{ '/frontend/property-list' }}"> Back </a>To List Page</p>
    </div>
</div>
<!-- END SECTION USER PROFILE -->

<x-left-footer />

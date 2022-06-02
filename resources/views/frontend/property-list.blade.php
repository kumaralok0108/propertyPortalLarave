<x-left-menu/>
<div class="dashborad-box">
    <h4 class="title">Property Listing Page</h4>
    <p> <a href="{{('/frontend/add-property')}}"> Add More </a></p>
    <div class="section-body listing-table">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sr. No</th>
                        <th>ID. No</th>
                        <th>Location</th>
                        <th>Asset Type</th>
                       {{--  <th>Property Type</th>
                        <th>No. Bedrooms</th>
                        <th>No. Rooms</th>
                        <th>No. Bathroom</th> --}}
                        <th>Address</th>
                        {{-- <th>Description</th> --}}
                        {{-- <th>Video Link</th>
                        <th>Short Let</th>
                        <th>Long Let</th> --}}
                        <th>ShorT Let Price</th>
                        <th>Long Let Price</th>
                        <th>Images</th>
                        <th>Users</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <?php $no=1;?>
                    @foreach ($propertylists as $properties)
                  <tbody>
                    <tr>	 
                        <td> {{ $no++ }}</td> 
                        <td>{{ $properties->idPropertyList }}</td>
                        <td>{{ $properties->CountryName }}</td>
                        <td>{{ $properties->AssetName }}</td>
                        {{-- <td>{{ $properties->idPropertyType }}</td>
                        <td>{{ $properties->NumberOfBedrooms }}</td>
                        <td>{{ $properties->NumberOfRooms }}</td>
                        <td>{{ $properties->NumberOfBathroom }}</td> --}}
                        <td>{{ $properties->Address }} </td> 
                        {{-- <td>{{ $properties->Description }}</td> --}}
                   {{-- <td>{{ $properties->VideoLink }}</td>
                        <td>{{ $properties->ShortLet }}</td>
                        <td>{{ $properties->LongLet }}</td> --}}
                        <td>{{ $properties->ShortLetPrice }}</td>
                        <td>{{ $properties->LongLetPrice }}</td>
                        <td> <img src="{{env('APP_URL')}}/storage/files/{{$properties->thumb}}" width="70px" height="30px" alt="{{$properties->thumb}}" /> </td> 
                        <td> @if ($properties->idUsers == '1') Active @else Unactive @endif</td>
                        {{-- <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td> --}}
                          {{-- <td> @if ($properties->LocationStatus == '1') Active @else Unactive @endif</td> --}}
                <td><a href="/frontend/editproperty/{{$properties->idPropertyList }}"><i class="fas fa-pencil-alt"></i></a> | 
            <a onclick="return confirm('Are you sure?')" href="/frontend/deletepropertylistitem/{{$properties->idPropertyList}}"><i class="far fa-trash-alt"></i></a> | 
            <a href="/frontend/property-detail-list/{{$properties->idPropertyList }}"><i class="fa fa-eye"></i></a></td>
                </tr>
                    </tr>
                    @endforeach
                </tbody>
               
            </table>
         
            {{ $propertylists->links('pagination::bootstrap-4') }}

            
        </div>

    </div>
</div>

        <x-left-footer/>
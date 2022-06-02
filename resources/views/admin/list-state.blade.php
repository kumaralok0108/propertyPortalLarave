<x-admin-header/>
<section role="main" class="content-body card-margin">
<header class="page-header">
<h2>Property</h2>
<div class="right-wrapper text-end">
  <ol class="breadcrumbs">
    <li>
      <a href="{{ url('/') }}">
        <i class="bx bx-home-alt"></i>
      </a>
    </li>
    <li><span>Property Type</span></li>
  </ol>
  <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
</div>
</header>
<!-- start: page -->
<div class="row">
  <div class="col-lg-12">
    <section class="card">
      <header class="card-header">
        <div class="card-actions">
          <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
          <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
        </div>
        <h2 class="card-title">States List </h2> <h4><a href="{{'/admin/add-state'}}"> Add More</a></h4>
      </header>
      <div class="card-body">
        <table class="table table-responsive-md mb-0">
          <thead>
            <tr>
              <th>Sr No</th>
              <th>State Name</th>
              <th>State Country</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1;?>
            @foreach ($stateslist as $states)
        <tr>
          <td> {{ $no++ }}</td> 
          <td>{{ $states->StateName }}</td>
          <td>{{ $states->CountryName }}</td>

          <td> @if ($states->StateStatus == '1') Active @else Unactive @endif</td>
        <td>
          <a href = "/admin/updatestate/{{$states->stateId}}"><i class="fas fa-pencil-alt"></i></a>  |  
          <a onclick="return confirm('Are you sure?')" href="/admin/deletestate/{{$states->stateId}}"> 
          <i class="far fa-trash-alt"></i></a></td>
        </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>
<x-admin-footer/>
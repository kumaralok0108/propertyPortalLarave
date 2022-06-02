<x-admin-header/>

<section role="main" class="content-body card-margin">
  <header class="page-header">
    <h2>Edit/ Update Cuntry </h2>
    <div class="right-wrapper text-end">
      <ol class="breadcrumbs">
        <li>
          <a href="{{ url('/') }}">
            <i class="bx bx-home-alt"></i>
          </a>
        </li>
        <li><span>Country</span></li>
      </ol>
      <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
    </div>
  </header>
  <!-- start: page -->
    <div class="row">
      <div class="col">
        <section class="card">
          <header class="card-header">
            <div class="card-actions">
              <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
              <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
            </div>
            <h2 class="card-title">Edit/ Update Country</h2>
          </header>
          <div class="card-body">
                <form class="form-horizontal form-bordered" action="/admin/updatelocation" method="POST">
                  @csrf
                  <input type="hidden" name="countryId" value="{{$locations->countryId}}">
                   <div class="form-group row pb-3">
                      <label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Country Name
                        <span class="required">*</span></label>
                        @if ($errors->any())
                      @foreach ($errors->all() as $error)
                      <p class="card-description">{{ $error }}</p>
                      @endforeach
                      @endif
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="exampleInputName1" 
                      value="{{$locations->CountryName}}" name="CountryName"/>
                    </div>
                  </div>
                  <div class="form-group row pb-3">
                    <label class="col-lg-3 control-label text-lg-end pt-2" name="CountryStatus">Select Status <span class="required">*</span></label>
                    <div class="col-lg-6">
                    <select class="form-control" id="exampleSelectGender" name="CountryStatus">
                          <option value="">Select Status</option>
                          <option value="1" @if ($locations->CountryStatus == '1') selected @endif>Active</option>
                          <option value="2" @if ($locations->CountryStatus == '2') selected @endif>UnActive</option>
                        </select>
                        <br>
                        <input type="submit" class="mb-1 mt-1 me-1 btn btn-primary" value="Save"/>
                        <a href="/admin/list-location" class="mb-1 mt-1 me-1 btn btn-primary">Cancel</a>
                    </div>
                    </div>
                </form>
              </div>
            </section>
          </div>
        </div>
<x-admin-footer/>
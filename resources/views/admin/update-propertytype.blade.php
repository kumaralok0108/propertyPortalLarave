<x-admin-header />

<section role="main" class="content-body card-margin">
    <header class="page-header">
        <h2>Property Type</h2>
        <div class="right-wrapper text-end">
            <ol class="breadcrumbs">
                <li>
                    <a href="/">
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
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>
                    <h2 class="card-title">Add Property Type</h2>
                </header>
                <div class="card-body">
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <p class="card-description">{{ $error }}</p>
                @endforeach
                @endif
                <form method="POST" action="/admin/updatepropertytype" class="form-horizontal form-bordered">
                  @csrf

                  <input type="hidden" name="idPropertyType" value="{{$property_type_list->idPropertyType}}">
                  <div class="form-group row pb-3">
                    <label class="col-lg-3 control-label text-lg-end pt-2">Asset Type<span
                            class="required">*</span></label>
                    <div class="col-lg-6">
                        <select class="form-control" id="exampleSelectGender" name="idAssetType">
                    @foreach ($getasset_types as $asset)
                      <option value="{{ $asset->idAssetType }}" @if($asset->idAssetType==$property_type_list->idAssetType) selected @endif>{{ $asset->AssetName }}</option>
                    @endforeach
                  </select>
                </div>
            </div>
                   <div class="form-group row pb-3">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="exampleInputName1">Property Type Name</label>
                    <div class="col-lg-6">
                    <input type="text" class="form-control" value="{{$property_type_list->PropertyTypeName}}"id="exampleInputName1" placeholder="Property Type Name" name="PropertyTypeName"/>
                  </div>
                   </div>
                  
               <div class="form-group row pb-3">
                <label class="col-lg-3 control-label text-lg-end pt-2" for="exampleSelectGender">Status</label>
                <div class="col-lg-6">
                <select class="form-control" id="exampleSelectGender" name="PropertyTypeStatus">
                  <option value="1" @if($property_type_list->PropertyTypeStatus==1) selected @endif>Active</option>
                  <option value="2"@if($property_type_list->PropertyTypeStatus==2) selected @endif>UnActive</option>
                </select>
                </div>
          </div>
                  <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                  <a href="/admin/list-property-type" class="btn btn-primary mr-2">Cancel</a>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>

<x-admin-footer/>


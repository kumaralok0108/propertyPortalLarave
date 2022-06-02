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
                    <form class="form-horizontal form-bordered" method="POST" action="/admin/savepropertytype">
                        @csrf
                        <div class="form-group row pb-3">
                            <label class="col-lg-3 control-label text-lg-end pt-2">Asset Type<span
                                    class="required">*</span></label>
                            <div class="col-lg-6">
                                <select class="form-control" id="exampleSelectGender" name="idAssetType">
                                    @foreach ($assettype as $asset)
                                        <option value="{{ $asset->idAssetType }}">{{ $asset->AssetName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row pb-3">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Propert Type Name
                                <span class="required">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="exampleInputName1"
                                    placeholder="Property Type Name" name="PropertyTypeName" />
                            </div>
                        </div>
                        <div class="form-group row pb-3">
                            <label class="col-lg-3 control-label text-lg-end pt-2">Select Status <span
                                    class="required">*</span></label>
                            <div class="col-lg-6">
                                <select class="form-control" id="exampleSelectGender" name="PropertyTypeStatus">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">UnActive</option>
                                </select>
                                <br>
                                <input type="submit" class="mb-1 mt-1 me-1 btn btn-primary" value="Save" />
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <x-admin-footer />

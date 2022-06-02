<x-admin-header />

<section role="main" class="content-body card-margin">
    <header class="page-header">
        <h2>States</h2>
        <div class="right-wrapper text-end">
            <ol class="breadcrumbs">
                <li>
                    <a href="/">
                        <i class="bx bx-home-alt"></i>
                    </a>
                </li>
                <li><span>States</span></li>
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
                    <h2 class="card-title">Add States</h2>
                </header>
                <div class="card-body">
                    {{-- <!-- @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="card-description">{{ $error }}</p>
                        @endforeach
                    @endif --> --}}
                    <form class="form-horizontal form-bordered" method="POST" action="/admin/savestate">
                        @csrf
                        <div class="form-group row pb-3">
                            <label class="col-lg-3 control-label text-lg-end pt-2" name="countryId">Select County<span
                                    class="required">*</span></label>
                            <div class="col-lg-6">
                             <select class="form-control" id="countryId" name="countryId">
                                    <option>List of County</option>
                                    @foreach ($countrlist as $country)
                                        <option value="{{ $country->countryId }}">{{ $country->CountryName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row pb-3">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">State Name
                                <span class="required">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="StateName"
                                    placeholder="Enter Your State Name" name="StateName" />
                            </div>
                        </div>
                        <div class="form-group row pb-3">
                            <label class="col-lg-3 control-label text-lg-end pt-2">Select Status <span
                                    class="required">*</span></label>
                            <div class="col-lg-6">
                                <select class="form-control" id="StateStatus" name="StateStatus">
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

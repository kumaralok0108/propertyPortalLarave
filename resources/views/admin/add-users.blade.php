<x-admin-header/>

<section role="main" class="content-body card-margin">
  <header class="page-header">
    <h2>Categories</h2>
    <div class="right-wrapper text-end">
      <ol class="breadcrumbs">
        <li>
          <a href="index.html">
            <i class="bx bx-home-alt"></i>
          </a>
        </li>
        <li><span>Assets</span></li>
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
            <h2 class="card-title">Add Assets</h2>
          </header>
          <div class="card-body">
                <form class="form-horizontal form-bordered" method="POST" action="#">
                  <div class="form-group row pb-4">
                    <label for="exampleInputName1">Location Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Location Name" name="LocationName"/>
                  </div>
                  <div class="form-group row pb-4">
                    <label for="exampleInputName1">Location Status</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Location Status" name="LocationStatus"/>
                  </div>
                  <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>

<x-admin-footer/>
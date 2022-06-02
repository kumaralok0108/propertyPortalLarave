<x-admin-header/>
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
               <p class="card-description">Edit/ Update Users</p>
                <form class="forms-sample" method="POST" action="#">
                  <div class="form-group">
                    <label for="exampleInputName1">Location Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Location Name" name="LocationName"/>
                  </div>
                  <div class="form-group">
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
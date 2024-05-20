<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    
    @include('backend.scripts.css_scripts')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      @include('backend.partial.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('backend.partial.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Site Informations</h4>
                    <p class="card-description"> Edit informations</p>
                    <form class="forms-sample" method="POST" action="{{route('setting.update')}}" enctype="multipart/form-data"> @csrf
                      <div class="form-group ">
                        <label for="SiteName" >Site Name</label>
                        <input type="text" class="form-control" id="SiteName_id" name="site_name" value="{{$setting->site_name}}" >
                      </div>
                      <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" id="Email_id" name="email" value="{{$setting->email}}" >
                      </div>
                      <div class="form-group">
                        <label for="Mobile">Mobile</label>
                        <input type="text" class="form-control" id="Mobile_id" name="mobile" value="{{$setting->mobile}}" >
                      </div>
                      <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" id="Address_id" name="address" value="{{$setting->address}}" >
                      </div>
                      <div class="form-group">
                        <label for="Fcebook">Facebook</label>
                        <input type="text" class="form-control" id="Fcebook_id" name="facebook" value="{{$setting->facebook}}" >
                      </div>
                      <div class="form-group">
                        <label for="Instagram">Instagram</label>
                        <input type="text" class="form-control" id="Instagram_id" name="instagram" value="{{$setting->instagram}}" >
                      </div>
                      <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          @include('backend.partial.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('backend.scripts.js_scripts')
  </body>
</html>
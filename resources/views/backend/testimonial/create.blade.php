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
                    <h4 class="card-title">Testimonial Section Informations</h4>
                    <form class="forms-sample" method="POST" action="{{route('testimonial.store')}}" enctype="multipart/form-data"> @csrf
                      <div class="form-group ">
                        <label for="HeadingText" >Main Text</label>
                        <input type="text" class="form-control" id="HeadingText_id" name="main_text"  >
                      </div>
                      <div class="form-group">
                        <label for="SmallText">Client Name</label>
                        <input type="text" class="form-control" id="SmallText_id" name="client_name"  >
                      </div>
                      <div class="form-group">
                        <label for="SmallText">Client Service</label>
                        <input type="text" class="form-control" id="ButtonText_id" name="client_service"  >
                      </div>
                      <div class="form-group">
                        <label>Client Image</label>
                        <input type="file" name="client_image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload Slider</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Save</button>
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
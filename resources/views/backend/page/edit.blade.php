<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backend/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

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
                    <h4 class="card-title">Page Informations</h4>
                    <form class="forms-sample" method="POST" action="{{route('page.update',$editData->id)}}" enctype="multipart/form-data"> @csrf
                      <div class="form-group ">
                        <label for="title" >Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$editData->title}}" >
                      </div>
                      <div class="form-group ">
                        <label for="type" >Type</label>
                        <select class="form-control" name="type">
                           <option value="About Us">About Us</option>
                           <option value="Contact Us">Contact Us</option>
                        </select> 
                      </div>
                      <div class="form-group ">
                        <label for="description" >Description</label>
                        <textarea type="text" class="form-control" id="editor" name="description"  >{{ old('description', $editData->description) }}</textarea>
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
    <!-- plugins:js -->
    <script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('backend/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('backend/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backend/js/off-canvas.js')}}"></script>
    <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('backend/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('backend/js/file-upload.js')}}"></script>
    <script src="{{asset('backend/js/typeahead.js')}}"></script>
    <script src="{{asset('backend/js/select2.js')}}"></script>
    <!-- End custom js for this page -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

    <script type="text/javascript">
    CKEDITOR.replace('editor');
    </script>
  </body>
</html>
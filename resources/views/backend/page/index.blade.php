<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
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
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" >
                  <div class="card-body">
                    <h4 class="card-title">Page</h4>
                    <a href="{{route('page.create')}}" class="btn btn-info">Add New</a>
                    <table class="table table-striped table-hover mt-3">
                      <thead>
                        <tr >
                          <th> # </th>
                          <th> Title </th>
                          <th> Type </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allData as $key =>$row)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$row->title}}</td>
                          <td>{{$row->type}}</td>
                          <td>
                            <a href="{{route('page.edit',$row->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('page.delete',$row->id)}}" class="btn btn-info">Delete</a>
                          </td>
                        </tr> 
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @include('backend.partial.footer')
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
  </body>
</html>


        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" >
                  <div class="card-body">
                    <h4 class="card-title">Page</h4>
                    <a href="{{route('page.create')}}" class="btn btn-info">Add New</a>
                    <table class="table table-striped table-hover mt-3">
                      <thead>
                        <tr >
                          <th> # </th>
                          <th> Title </th>
                          <th> Type </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allData as $key =>$row)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$row->title}}</td>
                          <td>{{$row->type}}</td>
                          <td>
                            <a href="{{route('page.edit',$row->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('page.delete',$row->id)}}" class="btn btn-info">Delete</a>
                          </td>
                        </tr> 
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @include('backend.partial.footer')
        </div>
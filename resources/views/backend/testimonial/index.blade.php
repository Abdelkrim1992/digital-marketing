<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    
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
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Testimonial</h4>
                    <a href="{{route('testimonial.create')}}" class="btn btn-info">Add New</a>
                    <table class="table table-dark mt-3">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Client Image </th>
                          <th> Main Text </th>
                          <th> Client Name </th>
                          <th> Client Service </th>
                          <th> Edit or delete </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allData as $key =>$row)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>
                            <img src="{{asset('frontend/img/testimonial/'.$row->client_image)}}">
                          </td>
                          <td>{{$row->main_text}}</td>
                          <td>{{$row->client_name}}</td>
                          <td>{{$row->client_service}}</td>
                          <td>
                            <a href="{{route('testimonial.edit',$row->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('testimonial.delete',$row->id)}}" class="btn btn-info">Delete</a>
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
    
    @include('backend.scripts.js_scripts')
    
  </body>
</html>
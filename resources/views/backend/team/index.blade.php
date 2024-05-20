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
                    <h4 class="card-title">Slider</h4>
                    <a href="{{route('team.create')}}" class="btn btn-info">Add New</a>
                    <table class="table table-dark mt-3">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Image </th>
                          <th> Heading Text </th>
                          <th> Small Text </th>
                          <th> Button Text </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allData as $key =>$row)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>
                            <img src="{{asset('frontend/img/slide/'.$row->image)}}">
                          </td>
                          <td>{{$row->heading}}</td>
                          <td>{{$row->small_text}}</td>
                          <td>{{$row->button_text}}</td>
                          <td>
                            <a href="{{route('team.edit',$row->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('team.delete',$row->id)}}" class="btn btn-info">Delete</a>
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
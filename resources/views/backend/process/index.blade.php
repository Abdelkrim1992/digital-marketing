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
                    <h4 class="card-title">Process Informations</h4>
                    <form class="forms-sample" method="POST" action="{{route('process.update')}}" enctype="multipart/form-data"> @csrf
                      <div class="form-group ">
                        <label for="title" >Process Section Title</label>
                        <input type="text" class="form-control" id="title_id" name="title" value="{{$process->title}}" >
                      </div>
                      <div class="form-group">
                        <label for="big_title">Next Title</label>
                        <input type="text" class="form-control" id="big_title_id" name="big_title" value="{{$process->big_title}}" >
                      </div>
                      <div class="form-group">
                        <label for="main_text">Main Text</label>
                        <textarea type="text" class="form-control" id="main_text_id" name="main_text" >{{$process->main_text}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="first_title">First Title</label>
                        <input type="text" class="form-control" id="first_title_id" name="first_title" value="{{$process->first_title}}" >
                      </div>
                      <div class="form-group">
                        <label for="first_text">First Text</label>
                        <textarea type="text" class="form-control" id="first_text_id" name="first_text" >{{$process->first_text}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="second_title">Second Title</label>
                        <input type="text" class="form-control" id="first_text_id" name="second_title" value="{{$process->second_title}}" >
                      </div>
                      <div class="form-group">
                        <label for="second_text">Second Text</label>
                        <textarea type="text" class="form-control" id="second_text_id" name="second_text" >{{$process->second_text}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="thirty_title">Thirty Title</label>
                        <input type="text" class="form-control" id="thirty_title_id" name="thirty_title" value="{{$process->thirty_title}}" >
                      </div>
                      <div class="form-group">
                        <label for="thirty_text">Thirty Text</label>
                        <textarea type="text" class="form-control" id="thirty_text_id" name="thirty_text" >{{$process->thirty_text}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="forty_title">Forty Title</label>
                        <input type="text" class="form-control" id="forty_title_id" name="forty_title" value="{{$process->forty_title}}" >
                      </div>
                      <div class="form-group">
                        <label for="forty_title">Forty Text</label>
                        <textarea type="text" class="form-control" id="forty_title_id" name="forty_text" >{{$process->forty_text}}</textarea>
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
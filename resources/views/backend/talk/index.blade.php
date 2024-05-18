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
                    <h4 class="card-title">Talk Informations</h4>
                    <form class="forms-sample" method="POST" action="{{route('talk.update')}}" enctype="multipart/form-data"> @csrf
                      <div class="form-group ">
                        <label for="title" >Talk Section Title</label>
                        <input type="text" class="form-control" id="title_id" name="title" value="{{$talk->title}}" >
                      </div>
                      <div class="form-group">
                        <label for="big_title">Next Title</label>
                        <input type="text" class="form-control" id="big_title_id" name="big_title" value="{{$talk->big_title}}" >
                      </div>
                      <div class="form-group">
                        <label for="main_text">Main Text</label>
                        <textarea type="text" class="form-control" id="main_text_id" name="main_text" >{{$talk->main_text}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" class="form-control" id="button_text_id" name="button_text" value="{{$talk->button_text}}" >
                      </div>
                      <div class="form-group">
                        <label for="form_title">Form Text</label>
                        <input type="text" class="form-control" id="form_title_id" name="form_title" value="{{$talk->form_title}}" >
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
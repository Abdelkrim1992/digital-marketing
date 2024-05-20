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
                    <h4 class="card-title">Slider Informations</h4>
                    <form class="forms-sample" method="POST" action="{{route('team.update',$editData->id)}}" enctype="multipart/form-data"> @csrf
                      <div class="form-group ">
                        <label for="HeadingText" >Member Name</label>
                        <input type="text" class="form-control" id="HeadingText_id" name="member_name" value="{{$editData->member_name}}" >
                      </div>
                      <div class="form-group">
                        <label for="SmallText">Member Speciality</label>
                        <input type="text" class="form-control" id="SmallText_id" name="member_speciality" value="{{$editData->member_speciality}}" >
                      </div>
                      <div class="form-group">
                        <label for="SmallText">Facebook of the member</label>
                        <input type="text" class="form-control" id="ButtonText_id" name="member_facebook" value="{{$editData->member_facebook}}" >
                      </div>
                      <div class="form-group">
                        <label for="SmallText">Instagram of the member</label>
                        <input type="text" class="form-control" id="ButtonText_id" name="member_instagram" value="{{$editData->member_instagram}}" >
                      </div>
                      <div class="form-group">
                        <label for="SmallText">Current Image</label>
                        <div class="col-sm-8 mt-2">
                          <img src="{{'/frontend/img/team/'.$editData->member_image}}" width="100 px">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Member Image</label>
                        <input type="file" name="member_image" class="file-upload-default">
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
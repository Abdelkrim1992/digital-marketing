<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.scripts.css_scripts')
    
    <title>Team Management</title>

</head>
<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>
    <div class="main-wrapper">

        @include('backend.partial.header')
        @include('backend.partial.sidebar')

        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Edit Team Member</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <form method="POST" action="{{route('team.update',$editData->id)}}" enctype="multipart/form-data"> @csrf
                        <div class="row" >
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Member Name <span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Member Name" id="member_name" name="member_name" value="{{$editData->member_name}}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Member Speciality <span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Member Speciality" id="member_speciality" name="member_speciality" value="{{$editData->member_speciality}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Instagram<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Instagram" id="instagram" name="instagram" value="{{$editData->instagram}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Facebook<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Facebook" id="facebook" name="facebook" value="{{$editData->facebook}}">
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="SmallText">Current Member Photo</label>
                              <div class="col-sm-8 mt-2" name="current_member_image" >
                                <img src="{{asset('frontend/img/team/'.$editData->member_image)}}" width="100 px">
                              </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Member Photo</label>
                                    <div for="member_image" class="image-upload" id="member_image" name="member_image">
                                        <input type="file" name="member_image">
                                        <div for="member_image" class="image-uploads" name="member_image">
                                            <img src="{{asset('backend/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <button href="{{route('team.index')}}" class="btn btn-cancel">Cancel</button>
                                </div>
                            </div>    
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.scripts.js_scripts')
</body>
</html>

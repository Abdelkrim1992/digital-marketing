
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos admin template</title>

    @include('backend.scripts.css_scripts')

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
                        <h4>Add Team Member</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <form method="POST" action="{{route('team.store')}}" enctype="multipart/form-data"> @csrf
                        <div class="row" > 
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Member Name <span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Member Name" name="member_name" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Speciality <span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Member Speciality" name="member_speciality" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Instagram<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Instagram" name="instagram" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Facebook<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Facebook" name="facebook" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Member Photo</label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads" name="member_image">
                                            <img src="{{asset('backend/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <button href="{{route('dashboard')}}" class="btn btn-cancel">Cancel</button>
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

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
                        <h4>Add Testimonial</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <form method="POST" action="{{route('testimonial.update',$editData->id)}}" enctype="multipart/form-data"> @csrf
                        <div class="row" >
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Client Name <span class="manitory">*</span></label>
                                    <input type="text" name="member_name" value="{{$editData->client_name}}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Client Service <span class="manitory">*</span></label>
                                    <input type="text"  name="member_speciality" value="{{$editData->client_service}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Comment<span class="manitory">*</span></label>
                                    <textarea type="text"  name="main_text" > {{$editData->main_text}} </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="SmallText">Current Client Image</label>
                              <div class="col-sm-8 mt-2">
                                <img src="{{'/frontend/img/team/'.$editData->member_image}}" width="100 px">
                              </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Client Photo</label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads" name="client_image">
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

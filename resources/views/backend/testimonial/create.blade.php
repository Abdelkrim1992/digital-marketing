<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.scripts.css_scripts')
    
    <title>Testimonial Management</title>

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
                    <div class="card-body" >
                        <form method="POST" action="{{route('testimonial.store')}}" enctype="multipart/form-data"> @csrf
                        <div class="row" >
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Client Name<span class="manitory">*</span></label>
                                    <input type="text" name="client_name" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Client Service<span class="manitory">*</span></label>
                                    <input type="text" name="client_service" >
                                </div>
                            </div>
                            <div class="form-group">
                                    <label>Comment<span class="manitory">*</span></label>
                                    <textarea type="text" name="main_text" ></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Member Photo</label>
                                    <div for="client_image" class="image-upload" id="client_image" name="client_image">
                                        <input type="file" name="client_image">
                                        <div for="client_image" class="image-uploads" name="client_image">
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

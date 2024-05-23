<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.scripts.css_scripts')
    
    <title>General Settings</title>
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
                        <h4>General Setting</h4>
                        <h6>Manage General Setting</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" >
                        <form method="POST" action="{{route('setting.update')}}" enctype="multipart/form-data"> @csrf
                        <div class="row" >
                            <div class="col-lg-3 col-sm-6 col-12" >
                                <div class="form-group">
                                    <label>Website Name <span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Website Name" name="site_name" value="{{$setting->site_name}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Email" name="email" value="{{$setting->email}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Phone<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Business Phone Number" name="mobile" value="{{$setting->mobile}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Address<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Address" name="address" value="{{$setting->address}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Instagram<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Instagram" name="instagram" value="{{$setting->instagram}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Facebook<span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter Facebook" name="facebook" value="{{$setting->facebook}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Logo Image</label>
                                    <div class="image-upload" name="logo" alt="logo" file="logo" >
                                        <input type="file" name="logo" >
                                        <div class="image-uploads" name="logo" alt="logo" file="logo" >
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

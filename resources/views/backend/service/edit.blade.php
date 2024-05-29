<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.scripts.css_scripts')
    
    <title>Service Management</title>

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
                        <h4>Edit Service </h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <form method="POST" action="{{route('service.update',$editData->id)}}" enctype="multipart/form-data"> @csrf
                        <div class="row" >
                                <div class="form-group col-lg-6 col-sm-12">
                                    <label>Service Title </label>
                                    <input type="text"  id="service_title" name="service_title" value="{{$editData->service_title}}">
                                </div>
                                <div class="form-group">
                                    <label>Short Description </label>
                                    <textarea type="text"  id="short_description" name="short_description" >{{$editData->short_description}}</textarea>
                                </div>
                                <div class="form-group col-lg-6 col-sm-12">
                                    <label>Button Text </label>
                                    <input type="text"  id="button_text" name="button_text" value="{{$editData->button_text}}">
                                </div>
                                <div class="card-body">
                                        <div class="col-sm-12">
                                            <label>Full Description </label>
                                            <textarea id="summernote" name="service_description" >{{$editData->service_description}}</textarea>
                                        </div>
                                </div>
                                

                            <div class="form-group">
                              <label for="SmallText">Current Service Icon</label>
                              <div class="col-sm-8 mt-2" id="service_icon" name="service_icon">
                                <img src="{{asset('frontend/img/service/'.$editData->service_icon)}}" width="100 px">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="SmallText">Current Service Hover</label>
                              <div class="col-sm-8 mt-2" id="service_hover" name="service_hover">
                                <img src="{{asset('frontend/img/service/'.$editData->service_hover)}}" width="100 px">
                              </div>
                            </div>
                                
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Add Service Icon</label>
                                    <div for="service_icon" class="image-upload" id="service_icon" name="service_icon">
                                        <input type="file" name="service_icon">
                                        <div for="service_icon" class="image-uploads" name="service_icon">
                                            <img src="{{asset('backend/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Add Service Hover</label>
                                    <div for="service_hover" class="image-upload" id="service_hover" name="service_hover">
                                        <input type="file" name="service_hover">
                                        <div for="service_hover" class="image-uploads" name="service_hover">
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
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                callbacks: {
                    onImageUpload: function(files) {
                        // Handle image upload (e.g., upload to the server and get the URL)
                        console.log('Image upload:', files);
                    }
                }
            });

            $('#saveContent').on('click', function() {
                var content = $('#summernote').val();
                // Save content to the database (via AJAX or form submission)
                console.log('Content:', content);
            });
        });
    </script>

    @include('backend.scripts.js_scripts')
</body>
</html>

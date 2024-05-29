<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.scripts.css_scripts')
    
    <title>User Management</title>

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
                        <h4>Edit User Infomations</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <form method="POST" action="{{route('user.update',$editData->id)}}" enctype="multipart/form-data"> @csrf
                        <div class="row" >
                        <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Full Name </label>
                                    <input type="text" name="name" value="{{$editData->name}}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="text" name="email" value="{{$editData->email}}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input type="text" name="phone" value="{{$editData->phone}}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text" name="address" value="{{$editData->address}}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Password </label>
                                    <div class="pass-group" name="password" >
                                        <input type="password" class=" pass-input" name="password" >
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>   
                            </div> 
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Role </label>
                                    <input type="text" name="role" value="{{$editData->role}}">
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="SmallText">Current User Photo</label>
                              <div class="col-sm-8 mt-2" name="image" >
                                <img src="{{asset('backend/img/user/'.$editData->image)}}" width="100 px">
                              </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>User Photo</label>
                                    <div class="image-upload" id="image" name="image">
                                        <input type="file" name="image">
                                        <div class="image-uploads" name="image">
                                            <img src="{{asset('backend/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <button href="{{route('user.index')}}" class="btn btn-cancel">Cancel</button>
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

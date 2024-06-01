<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.scripts.css_scripts')
    
    <title>Client Management</title>

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
                        <h4>Edit Client Infomations</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <form method="POST" action="{{route('current_clients_update',$editData->id)}}" enctype="multipart/form-data"> @csrf
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
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Role </label>
                                    <select name="service" id="service" class="form-control" required>
                                        <option value="{{ $editData->service_title }}">{{ $editData->service_title }}</option>
                                    </select>
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

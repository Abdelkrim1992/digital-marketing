
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
                        <h4>Add Client</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <form method="POST" action="{{route('client.store')}}" enctype="multipart/form-data"> @csrf
                        <div class="row" > 
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Client Name </label>
                                    <input type="text" name="client_name" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="email" name="client_email" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input type="phone" name="client_phone" >
                                </div>
                            </div> 
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Choosed Service </label>
                                    <select type="text" name="choosed_service" >
                                        @foreach($service as $row)
                                            <option value="choosed_service">{{$service->choosed_service}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> 
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Subject </label>
                                    <textarea type="text" name="message" ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <button href="{{route('client.index')}}" class="btn btn-cancel">Cancel</button>
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

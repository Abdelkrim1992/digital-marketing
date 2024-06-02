
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
                        <h4>Add Team Member</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <form action="{{ route('confirmed-clients.store') }}" method="POST"> @csrf
                        <div class="row" > 
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Client Name <span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter client name" id="client_name" name="client_name" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Client Email <span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter client email" id="client_email" name="client_email" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Client Phone <span class="manitory">*</span></label>
                                    <input type="text" placeholder="Enter client phone" id="client_phone" name="client_phone" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Choosed Service <span class="manitory">*</span></label>
                                        <select class="col-lg-3 col-sm-6 col-12" name="choosed_service" >
                                           @foreach($service as $row)
                                              <option value="$row->service_title">{{$row->service_title}}</option>
                                           @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Project Description <span class="manitory">*</span></label>
                                    <textarea type="text" placeholder="Enter project description" id="project_description" name="project_description" ></textarea>
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

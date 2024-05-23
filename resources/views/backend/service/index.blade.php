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
                        <h4>Service List</h4>
                        <h6>Manage your services</h6>
                    </div>
                    <div class="page-btn">
                        <a href="{{route('service.create')}}" class="btn btn-added">
                            <img src="{{asset('backend/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Service
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service Icon</th>
                                        <th>Service Title</th>
                                        <th>Service Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($allData as $key=>$row)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>
                                        <img src="{{asset('frontend/img/service/'.$row->service_icon)}}" alt="service_icon" class="profile-image">
                                        </td>
                                        <td>{{$row->service_title}}</td>
                                        <td>{{$row->service_description}}</td>
                                        <td>{{$row->main_text}}</td>
                                        <td>
                                            <a class="me-3" href="{{route('service.edit',$row->id)}}">
                                                <img src="{{asset('backend/img/icons/edit.svg')}}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="{{route('service.delete',$row->id)}}">
                                                <img src="{{asset('backend/img/icons/delete.svg')}}" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                  @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.scripts.js_scripts')

</body>
</html>

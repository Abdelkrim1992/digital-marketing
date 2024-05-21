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
                        <h4>Services List</h4>
                        <h6>Manage your services</h6>
                    </div>
                    <div class="page-btn">
                        <a href="{{route('testimonial.create')}}" class="btn btn-added">
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
                                        <th>Client Photo</th>
                                        <th>Client Name</th>
                                        <th>Client Service</th>
                                        <th>Edit Or Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($allData as $key=>$row)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>
                                          <img src="{{asset('backend/img/icons/'.$row->client_image)}}" alt="img">
                                        </td>
                                        <td>{{$row->client_name}}</td>
                                        <td>{{$row->client_service}}</td>
                                        <td>
                                            <a class="me-3" href="{{route('testimonial.edit',$row->id)}}">
                                                <img src="{{asset('backend/img/icons/edit.svg')}}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="{{route('testimonial.delete',$row->id)}}">
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

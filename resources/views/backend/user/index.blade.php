<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.scripts.css_scripts')
    
    <title>Admin User Management</title>

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
                        <h4>Admin User List</h4>
                        <h6>Manage your admin users</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Admin Photo</th>
                                        <th>Admin Name</th>
                                        <th>Admin Email</th>
                                        <th>Admin Phone</th>
                                        <th>Edit Or Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($allData as $key=>$row)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>
                                          <img src="{{asset('backend/img/user/'.$row->image)}}" class="profile-image" alt="member_image">
                                        </td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->phone}}</td>
                                        <td>
                                            <a class="me-3" href="{{route('user.edit',$row->id)}}">
                                                <img src="{{asset('backend/img/icons/edit.svg')}}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="{{route('user.delete',$row->id)}}">
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

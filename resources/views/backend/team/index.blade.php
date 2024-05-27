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
                        <h4>Team Member List</h4>
                        <h6>Manage your team members</h6>
                    </div>
                    <div class="page-btn">
                        <a href="{{route('team.create')}}" class="btn btn-added">
                            <img src="{{asset('backend/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Member
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
                                        <th>Member Photo</th>
                                        <th>Member Name</th>
                                        <th>Member Speciality</th>
                                        <th>Edit Or Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($allData as $key=>$row)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>
                                          <img src="{{asset('frontend/img/team/'.$row->member_image)}}" class="profile-image" alt="member_image">
                                        </td>
                                        <td>{{$row->member_name}}</td>
                                        <td>{{$row->member_speciality}}</td>
                                        <td>
                                            <a class="me-3" href="{{route('team.edit',$row->id)}}">
                                                <img src="{{asset('backend/img/icons/edit.svg')}}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="{{route('team.delete',$row->id)}}">
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

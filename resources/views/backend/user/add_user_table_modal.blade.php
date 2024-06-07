<!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" id="select-all" />
                    </div>
                </th>
                <th class="text-center min-w-100px">Image</th>
                <th class="text-center min-w-100px">User</th>
                <th class="text-center min-w-100px">Phone</th>
                <th class="text-center min-w-100px">Address</th>
                <th class="text-center min-w-100px">Role</th>
                <th class="text-center min-w-50px">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            @foreach($allData as $key=>$row)
            <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox"/>
                    </div>
                </td>
                <td class="text-center">
                    <!--begin:: Avatar -->
                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <a href="{{route('user.edit',$row->id)}}">
                            <div class="symbol-label">
                                <img src="{{asset('backend/img/user/'.$row->image)}}" alt="img" class="w-100" />
                            </div>
                        </a>
                    </div>
                    <!--end::Avatar-->
                    
                </td>
                <td class="text-center">
                    <!--begin::User details-->
                    <div class="d-flex flex-column ">
                        <a href="{{route('user.edit',$row->id)}}" class="text-gray-800 text-hover-primary mb-1">{{$row->name}}</a>
                        <span>{{$row->email}}</span>
                    </div>
                    <!--begin::User details-->
                </td>
                <td class="text-center">{{$row->phone}}</td>
                <td class="text-center">{{$row->address}}</td>
                <td class="text-center">{{$row->role->name ?? 'No Role'}}</td>
                <td class="text-center">
                    <a class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{route('user.edit',$row->id)}}" class="menu-link px-3">Edit</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{route('user.delete',$row->id)}}" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<!--end::Table-->
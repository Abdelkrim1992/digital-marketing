<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>

    <base href="" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
	
    @include('backend.scripts.css_scripts')
	
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" class="app-default" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light"; 
        var themeMode; 
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) { 
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); 
            } else { 
                if (localStorage.getItem("data-bs-theme") !== null) { 
                    themeMode = localStorage.getItem("data-bs-theme"); 
                } else { 
                    themeMode = defaultThemeMode; 
                } 
            } 
            if (themeMode === "system") { 
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; 
            } 
            document.documentElement.setAttribute("data-bs-theme", themeMode); 
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            @include('backend.partial.header')
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                @include('backend.partial.sidebar')
               
				    <!--begin::Main-->
				    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Team Members List</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Team Management</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Members</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search member" />
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
													
													<!--begin::Add user-->
													<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
													<i class="ki-duotone ki-plus fs-2"></i>Add Member</button>
													<!--end::Add user-->
												</div>
												<!--end::Toolbar-->
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
													<div class="fw-bold me-5">
													<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
												</div>
												<!--end::Group actions-->
												<!--begin::Modal - Add task-->
												<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
													<!--begin::Modal dialog-->
													<div class="modal-dialog modal-dialog-centered mw-650px">
														<!--begin::Modal content-->
														<div class="modal-content">
															<!--begin::Modal header-->
															<div class="modal-header" id="kt_modal_add_user_header">
																<!--begin::Modal title-->
																<h2 class="fw-bold">Add Member</h2>
																<!--end::Modal title-->
																<!--begin::Close-->
																<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
																	<i class="ki-duotone ki-cross fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Close-->
															</div>
															<!--end::Modal header-->
															<!--begin::Modal body-->
															<div class="modal-body px-5 my-7">
																<!--begin::Form-->
																<form id="kt_modal_add_user_form" class="form" action="{{route('team.store')}}" data-kt-redirect="{{ route('team.index') }}" method="post" enctype="multipart/form-data"> @csrf
																	<!--begin::Scroll-->
																	<div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="d-block fw-semibold fs-6 mb-5">Member Photo</label>
																			<!--end::Label-->
																			<!--begin::Image placeholder-->
																			<style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
																			<!--end::Image placeholder-->
																			<!--begin::Image input-->
																			<div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
																				<!--begin::Preview existing avatar-->
																				<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg);"></div>
																				<!--end::Preview existing avatar-->
																				<!--begin::Label-->
																				<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																					<i class="ki-duotone ki-pencil fs-7">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>
																					<!--begin::Inputs-->
																					<input type="file" name="member_image" accept=".png, .jpg, .jpeg" />
																					<input type="hidden" name="avatar_remove" />
																					<!--end::Inputs-->
																				</label>
																				<!--end::Label-->
																				<!--begin::Cancel-->
																				<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																					<i class="ki-duotone ki-cross fs-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>
																				</span>
																				<!--end::Cancel-->
																				<!--begin::Remove-->
																				<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																					<i class="ki-duotone ki-cross fs-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>
																				</span>
																				<!--end::Remove-->
																			</div>
																			<!--end::Image input-->
																			<!--begin::Hint-->
																			<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
																			<!--end::Hint-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="required fw-semibold fs-6 mb-2">Member Name</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" name="member_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Member name" />
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="required fw-semibold fs-6 mb-2">Email</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" />
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="required fw-semibold fs-6 mb-2">Phone</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone number" />
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="required fw-semibold fs-6 mb-2">Speciality</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" name="member_speciality" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Member speciality" />
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="required fw-semibold fs-6 mb-2">Facebook</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" name="facebook" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Member facebook" />
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="required fw-semibold fs-6 mb-2">Instagram</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" name="instagram" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Member instagram" />
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																	</div>
																	<!--end::Scroll-->
																	<!--begin::Actions-->
																	<div class="text-center pt-10">
																		<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
																		<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																			<span class="indicator-label">Submit</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																	</div>
																	<!--end::Actions-->
																</form>
																<!--end::Form-->
															</div>
															<!--end::Modal body-->
														</div>
														<!--end::Modal content-->
													</div>
													<!--end::Modal dialog-->
												</div>
												<!--end::Modal - Add task-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body py-4">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
												<thead>
													<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
															</div>
														</th>
														<th class="min-w-125px">Team Member</th>
														<th class="min-w-125px">Email</th>
														<th class="min-w-125px">Phone</th>
														<th class="min-w-125px">Speciality</th>
														<th class="text-end min-w-100px">Actions</th>
													</tr>
												</thead>
												<tbody class="text-gray-600 fw-semibold">
													@foreach($allData as $row)
													<tr data-member-id="{{ $row->id }}">
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td class="d-flex align-items-center">
															<!--begin:: Avatar -->
															<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																<a href="{{route('team.edit',$row->id)}}">
																	<div class="symbol-label">
																		<img src="{{asset('frontend/img/team/'.$row->member_image)}}" alt="member photo" class="w-100" />
																	</div>
																</a>
															</div>
															<!--end::Avatar-->
															<!--begin::User details-->
															<div class="d-flex flex-column">
																<a href="{{route('team.edit',$row->id)}}" class="text-gray-800 text-hover-primary mb-1">{{$row->member_name}}</a>
																
															</div>
															<!--begin::User details-->
														</td>
														<td>
															<span>{{$row->email}}</span>
														</td>
														<td>
															<div class="badge badge-light fw-bold">{{$row->phone}}</div>
														</td>
														<td>{{$row->member_speciality}}</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{route('team.edit',$row->id)}}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{route('team.delete',$row->id)}}" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
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
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
					</div>
					<!--end:::Main-->


            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
	<!--begin::Modal - Users Search-->
	    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Members</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
								</div>
								<!--end::Suggestions-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
	<!--end::Modal - Users Search-->
	

        <!--begin::Javascript-->
		<script>var hostUrl = "backend/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('backend/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('backend/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('backend/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('backend/js/custom/apps/team/teams/list/table.js')}}"></script>
		<script src="{{asset('backend/js/custom/apps/team/teams/list/add.js')}}"></script>
		<script src="{{asset('backend/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('backend/js/custom/widgets.js')}}"></script>
		<script src="{{asset('backend/js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

</body>
<!--end::Body-->
</html>

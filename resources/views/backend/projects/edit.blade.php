<!DOCTYPE html>
<html lang="en">
<head>
    <base href="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('backend.scripts.css_scripts')

</head>
<body id="kt_app_body" class="app-default" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true">
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            @include('backend.partial.header')
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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Project Settings</h1>
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
											<li class="breadcrumb-item text-muted">Projects</li>
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
								<div id="kt_app_content_container" class="app-container container-xxl pb-10">
									<!--begin::Navbar-->
									<div class="card mb-9">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
												<!--begin::Image-->
												<div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
													<img class="mw-50px mw-lg-75px" src="{{asset('backend/img/project/'.$editData->project_icon)}}" alt="image" />
												</div>
												<!--end::Image-->
												<!--begin::Wrapper-->
												<div class="flex-grow-1">
													<!--begin::Head-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::Details-->
														<div class="d-flex flex-column">
															<!--begin::Status-->
															<div class="d-flex align-items-center mb-1">
																<a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">{{$editData->project_name}}</a>
																
															</div>
															<!--end::Status-->
															<!--begin::Description-->
															<div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">{{$editData->short_description}}</div>
															<!--end::Description-->
														</div>
														<!--end::Details-->
														<!--begin::Actions-->
														<div class="d-flex mb-4">
															<!--begin::Menu-->
															<div class="me-0">
																<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																</button>
																<!--begin::Menu 3-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																	<!--begin::Heading-->
																	<div class="menu-item px-3">
																		<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Settings</div>
																	</div>
																	<!--end::Heading-->													
																	<!--begin::Menu item-->
																	<div class="menu-item px-3 my-1">
																		<a href="{{route('projects.delete',$editData->id)}}" class="menu-link px-3">Delete project</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu 3-->
															</div>
															<!--end::Menu-->
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Head-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap justify-content-start">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<div class="fs-4 fw-bold">{{$editData->due_date}}</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-400">Due Date</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<div class="fs-4 fw-bold" name="budget">${{$editData->budget}}</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-400">Budget Spent</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Details-->
											<div class="separator"></div>
											<!--begin::Nav-->
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
												<!--begin::Nav item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary py-5 me-6 active">Settings</a>
												</li>
												<!--end::Nav item-->
											</ul>
											<!--end::Nav-->
										</div>
									</div>
									<!--end::Navbar-->
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header">
											<!--begin::Card title-->
											<div class="card-title fs-3 fw-bold">Project Settings</div>
											<!--end::Card title-->
										</div>
										<!--end::Card header-->
										<!--begin::Form-->
										<form  class="form" method="POST" action="{{route('projects.update',$editData->id)}}" enctype="multipart/form-data"> @csrf
											<!--begin::Card body-->
											<div class="card-body p-9">
												<!--begin::Row-->
												<div class="row mb-5">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3">Project Logo</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Image input-->
														<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url('assets/media/svg/brand-logos/volicity-9.svg')"></div>
															<!--end::Preview existing avatar-->
															<!--begin::Label-->
															<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																<i class="ki-duotone ki-pencil fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
																<!--begin::Inputs-->
																<input type="file" name="project_icon" accept=".png, .jpg, .jpeg" />
																<input type="hidden" name="avatar_remove" />
																<!--end::Inputs-->
															</label>
															<!--end::Label-->
															<!--begin::Cancel-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																<i class="ki-duotone ki-cross fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
															<!--end::Cancel-->
															<!--begin::Remove-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
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
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3">Project Name</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xl-9 fv-row">
														<input type="text" class="form-control form-control-solid" name="project_name" value="{{$editData->project_name}}" />
													</div>
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3">Project Short Description</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xl-9 fv-row">
														<input type="text" class="form-control form-control-solid" name="short_description" value="{{$editData->short_description}}" />
													</div>
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3">Project Description</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xl-9 fv-row">
														<textarea name="project_description" class="form-control form-control-solid h-100px">{{$editData->project_description}}</textarea>
													</div>
													<!--begin::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3">Manage Budget</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xl-9">
														<!--begin::Dialer-->
														<div class="position-relative w-md-300px" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
															<!--begin::Decrease control-->
															<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
																<i class="ki-duotone ki-minus-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</button>
															<!--end::Decrease control-->
															<!--begin::Input control-->
															<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="budget" readonly="readonly" value="{{$editData->budget}}" />
															<!--end::Input control-->
															<!--begin::Increase control-->
															<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
																<i class="ki-duotone ki-plus-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</button>
															<!--end::Increase control-->
														</div>
														<!--end::Dialer-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3">Due Date</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xl-9 fv-row">
														<div class="position-relative d-flex align-items-center">
															<i class="ki-duotone ki-calendar-8 position-absolute ms-4 mb-1 fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
															</i>
															<input class="form-control form-control-solid ps-12" name="due_date" placeholder="Pick a date" id="kt_datepicker_1" {{$editData->due_date}} />
														</div>
													</div>
													<!--begin::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3">Status</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xl-9 fv-row">
														<select type="text" class="form-control form-control-solid" name="status_id" >
                                                            <option>Select project status</option>
                                                            @foreach($status as $row)
                                                                <option value="{{$row->id}}" >{{$row->status}}</option>
                                                            @endforeach
                                                        </select>
													</div>
												</div>
												<!--end::Row-->
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
												<button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes</button>
											</div>
											<!--end::Card footer-->
										</form>
										<!--end:Form-->
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
		</div>
	</div>

	@include('backend.scripts.js_scripts')

</body>
</html>


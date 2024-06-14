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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">My Projects</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="{{route('projects.index')}}" class="text-muted text-hover-primary">Home</a>
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
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Primary button-->
										<a href="{{route('projects.create')}}" class="btn btn-sm fw-bold btn-primary" >New Project</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl pb-10">
									
									<!--begin::Row-->
									<div class="row g-6 g-xl-9">
									  @foreach($allData as $row)
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="{{route('projects.edit', $row->id)}}" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="{{asset('backend/img/project/'.$row->project_icon)}}" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">{{$row->status->status ?? 'No status'}}</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">{{$row->project_name}}</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">{{$row->short_description}}</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">{{$row->due_date}}</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">${{$row->budget}}</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
									  @endforeach
									</div>
									<!--end::Row-->
									<!--begin::Pagination-->
									<div class="d-flex flex-stack flex-wrap pt-10">
										<div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 entries</div>
										<!--begin::Pages-->
										<ul class="pagination">
											<li class="page-item previous">
												<a href="#" class="page-link">
													<i class="previous"></i>
												</a>
											</li>
											<li class="page-item active">
												<a href="#" class="page-link">1</a>
											</li>
											<li class="page-item next">
												<a href="#" class="page-link">
													<i class="next"></i>
												</a>
											</li>
										</ul>
										<!--end::Pages-->
									</div>
									<!--end::Pagination-->
									<!--begin::Modals-->
									<!--begin::Modal - View Users-->
									<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog mw-650px">
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
													<!--begin::Heading-->
													<div class="text-center mb-13">
														<!--begin::Title-->
														<h1 class="mb-3">Browse Users</h1>
														<!--end::Title-->
														<!--begin::Description-->
														<div class="text-muted fw-semibold fs-5">If you need more info, please check out our
														<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
														<!--end::Description-->
													</div>
													<!--end::Heading-->
													<!--begin::Users-->
													<div class="mb-15">
														<!--begin::List-->
														<div class="mh-375px scroll-y me-n7 pe-7">
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">smith@kpmg.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$23,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">melody@altbox.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$50,500</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">max@kt.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$75,900</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">sean@dellito.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$10,500</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox
																		<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">brian@exchange.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$20,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">mik@pex.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$9,300</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$15,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild
																		<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">olivia@corpmail.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$23,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$45,800</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">dam@consilting.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$90,500</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">emma@intenso.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$5,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$70,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">robert@benko.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$45,500</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
														</div>
														<!--end::List-->
													</div>
													<!--end::Users-->
													<!--begin::Notice-->
													<div class="d-flex justify-content-between">
														<!--begin::Label-->
														<div class="fw-semibold">
															<label class="fs-6">Adding Users by Team Members</label>
															<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
														</div>
														<!--end::Label-->
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" checked="checked" />
															<span class="form-check-label fw-semibold text-muted">Allowed</span>
														</label>
														<!--end::Switch-->
													</div>
													<!--end::Notice-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - View Users-->
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
														<h1 class="mb-3">Search Users</h1>
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
																<!--begin::Users-->
																<div class="mh-375px scroll-y me-n7 pe-7">
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
																			<span class="badge badge-light">Art Director</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
																			<span class="badge badge-light">Marketing Analytic</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Max Smith</span>
																			<span class="badge badge-light">Software Enginer</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
																			<span class="badge badge-light">Web Developer</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
																			<span class="badge badge-light">UI/UX Designer</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																</div>
																<!--end::Users-->
															</div>
															<!--end::Suggestions-->
															<!--begin::Results(add d-none to below element to hide the users list by default)-->
															<div data-kt-search-element="results" class="d-none">
																<!--begin::Users-->
																<div class="mh-375px scroll-y me-n7 pe-7">
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
																				<div class="fw-semibold text-muted">smith@kpmg.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
																				<div class="fw-semibold text-muted">melody@altbox.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1" selected="selected">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
																				<div class="fw-semibold text-muted">max@kt.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
																				<div class="fw-semibold text-muted">sean@dellito.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
																				<div class="fw-semibold text-muted">brian@exchange.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
																				<div class="fw-semibold text-muted">mik@pex.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
																				<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
																				<div class="fw-semibold text-muted">olivia@corpmail.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
																				<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1" selected="selected">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
																				<div class="fw-semibold text-muted">dam@consilting.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
																				<div class="fw-semibold text-muted">emma@intenso.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
																				<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1" selected="selected">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
																				<div class="fw-semibold text-muted">robert@benko.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
																				<div class="fw-semibold text-muted">miller@mapple.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
																				<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
																				<div class="fw-semibold text-muted">ethan@loop.com.au</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1" selected="selected">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
																				<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																</div>
																<!--end::Users-->
																<!--begin::Actions-->
																<div class="d-flex flex-center mt-15">
																	<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
																	<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Results-->
															<!--begin::Empty-->
															<div data-kt-search-element="empty" class="text-center d-none">
																<!--begin::Message-->
																<div class="fw-semibold py-10">
																	<div class="text-gray-600 fs-3 mb-2">No users found</div>
																	<div class="text-muted fs-6">Try to search by username, full name or email...</div>
																</div>
																<!--end::Message-->
																<!--begin::Illustration-->
																<div class="text-center px-5">
																	<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
																</div>
																<!--end::Illustration-->
															</div>
															<!--end::Empty-->
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
									<!--end::Modals-->
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

<?php $confirmed_client= App\Models\ConfirmedClient::all()->count(); ?>
<?php $projects_number= App\Models\Project::all()->count(); ?>
<?php $projects= App\Models\Project::all(); ?>
<?php $status= App\Models\ProjectStatus::all(); ?>

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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Projects Dashboard</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Dashboards</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Secondary button-->
										<a href="{{route('projects.index')}}" class="btn btn-sm fw-bold btn-secondary">My Projects</a>
										<!--end::Secondary button-->
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
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Stats-->
									<div class="row gx-6 gx-xl-9">
										<div class="col-lg-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card h-100">
												<!--begin::Card body-->
												<div class="card-body p-9">
													<!--begin::Heading-->
													<div class="fs-2hx fw-bold">{{$projects_number}}</div>
													<div class="fs-4 fw-semibold text-gray-400 mb-7">Current Projects</div>
													<!--end::Heading-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-wrap">
														<!--begin::Labels-->
														<div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
																<div class="bullet bg-primary me-3"></div>
																<div class="text-gray-400">In Progress</div>
																<div class="ms-auto fw-bold text-gray-700">1</div>
															</div>
															<!--end::Label-->
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
																<div class="bullet bg-success me-3"></div>
																<div class="text-gray-400">Completed</div>
																<div class="ms-auto fw-bold text-gray-700">1</div>
															</div>
															<!--end::Label-->
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center">
																<div class="bullet bg-gray-300 me-3"></div>
																<div class="text-gray-400">Pending</div>
																<div class="ms-auto fw-bold text-gray-700">1</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Labels-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<div class="col-lg-6 col-xxl-4">
											<!--begin::Clients-->
											<div class="card h-100">
												<div class="card-body p-9">
													<!--begin::Heading-->
													<div class="fs-2hx fw-bold">{{$confirmed_client}}</div>
													<div class="fs-4 fw-semibold text-gray-400 mb-7">Our Customers</div>
													<!--end::Heading-->
													<!--begin::Users group-->
													<div class="symbol-group symbol-hover mb-9">
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
															<span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
														</div>
														<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
															<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+1</span>
														</a>
													</div>
													<!--end::Users group-->
													<!--begin::Actions-->
													<div class="d-flex">
														<a href="{{ route('confirmed-clients.index') }}" class="btn btn-primary btn-sm me-3" >All Customers</a>
													</div>
													<!--end::Actions-->
												</div>
											</div>
											<!--end::Clients-->
										</div>
									</div>
									<!--end::Stats-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xl-12 pt-10">
											<!--begin::Table widget 14-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Projects Stats</span>
													</h3>
													<!--end::Title-->
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																	<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
																	<th class="p-0 pb-3 min-w-100px text-center">CUSTOMER</th>
																	<th class="p-0 pb-3 min-w-100px text-center">BUDGET</th>
																	<th class="p-0 pb-3 min-w-175px text-center pe-12">STATUS</th>
																	<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
									@if(!empty($projects))							
										@foreach($projects as $project)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="{{ asset('backend/img/project/'.$project->project_icon) }}" alt="img" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="{{ route('projects.edit', $project->id) }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $project->project_name }}</a>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
												<td class="text-center pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">{{ $project->client_name }}</span>
                                                </td>
                                                <td class="text-center pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">${{ $project->budget }}</span>
                                                </td>
												<td class="text-center pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">{{ $project->status->status }}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
									@else
									   <tr>
										  <td>No projects found</td>
									   </tr>	
									@endif						</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 14-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
					</div>
					<!--end:::Main-->
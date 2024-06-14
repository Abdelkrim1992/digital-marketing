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
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl pb-10">
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
										<form class="form" method="POST" action="{{route('projects.store')}}" enctype="multipart/form-data"> @csrf
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
														<input type="text" class="form-control form-control-solid" name="project_name" placeholder="Project name" />
													</div>
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3">Client Name</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xl-9 fv-row">
														<input type="text" class="form-control form-control-solid" name="client_name" placeholder="Client name" />
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
														<input type="text" class="form-control form-control-solid" name="short_description" placeholder="Short description" />
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
														<textarea name="project_description" class="form-control form-control-solid h-100px" placeholder="Project description" required></textarea>
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
        <div class="position-relative w-md-300px" data-kt-dialer="true" data-kt-dialer-min="100" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
            <!--begin::Decrease control-->
            <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                <i class="ki-duotone ki-minus-square fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </button>
            <!--end::Decrease control-->
            <!--begin::Input control-->
            <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="budget" readonly="readonly" />
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
															<input class="form-control form-control-solid ps-12" name="due_date" placeholder="Pick a date" id="kt_datepicker_1" required/>
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

<script>
        document.addEventListener('DOMContentLoaded', function () {
    // Update the budget input value on form submit
    const form = document.querySelector('form');
    const budgetInput = document.querySelector('input[name="budget"]');

    form.addEventListener('submit', function (e) {
        const dialerControl = document.querySelector('[data-kt-dialer="true"]');
        const dialerInput = dialerControl.querySelector('[data-kt-dialer-control="input"]');
        
        // Remove the prefix and convert to a float
        const budgetValue = parseFloat(dialerInput.value.replace('$', '').replace(',', ''));

        // Set the cleaned value back to the input
        budgetInput.value = budgetValue;
    });

    // Dialer control logic
    const dialerControl = document.querySelector('[data-kt-dialer="true"]');
    const dialerInput = dialerControl.querySelector('[data-kt-dialer-control="input"]');
    const decreaseButton = dialerControl.querySelector('[data-kt-dialer-control="decrease"]');
    const increaseButton = dialerControl.querySelector('[data-kt-dialer-control="increase"]');
    const step = parseFloat(dialerControl.getAttribute('data-kt-dialer-step'));
    const min = parseFloat(dialerControl.getAttribute('data-kt-dialer-min'));
    const max = parseFloat(dialerControl.getAttribute('data-kt-dialer-max'));
    const prefix = dialerControl.getAttribute('data-kt-dialer-prefix') || '';
    const decimals = parseInt(dialerControl.getAttribute('data-kt-dialer-decimals')) || 0;

    decreaseButton.addEventListener('click', function () {
        let value = parseFloat(dialerInput.value.replace(prefix, '')) - step;
        if (value < min) value = min;
        dialerInput.value = prefix + value.toFixed(decimals);
    });

    increaseButton.addEventListener('click', function () {
        let value = parseFloat(dialerInput.value.replace(prefix, '')) + step;
        if (value > max) value = max;
        dialerInput.value = prefix + value.toFixed(decimals);
    });
    });

</script>

	@include('backend.scripts.js_scripts')

</body>
</html>


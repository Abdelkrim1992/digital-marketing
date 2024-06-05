<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>

  @include('backend.scripts.css_scripts') 

  </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Account Settings</h1>
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
											<li class="breadcrumb-item text-muted">Account</li>
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
									<!--begin::Basic info-->
									<div class="card mb-5 mb-xl-10">
										<!--begin::Card header-->
										<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Website Details</h3>
											</div>
											<!--end::Card title-->
										</div>
										<!--begin::Card header-->
										<!--begin::Content-->
										<div id="kt_account_settings_profile_details" class="collapse show">
											<!--begin::Form-->
											<form  method="POST" action="{{route('setting.update')}}" enctype="multipart/form-data"> @csrf
												<!--begin::Card body-->
												<div class="card-body border-top p-9">
                                                <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">Logo</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<!--begin::Image input-->
															<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
																<!--begin::Preview existing avatar-->
																<div name="logo" class="image-input-wrapper w-600px h-200px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
																<!--end::Preview existing avatar-->
																<!--begin::Label-->
																<label name="logo" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																	<i class="ki-duotone ki-pencil fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<!--begin::Inputs-->
																	<input type="file" name="logo" accept=".png, .jpg, .jpeg" />
																	<input type="hidden" name="logo" />
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
														<!--end::Col-->
													</div>
													<!--end::Input group-->
                                                    <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Company Name</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="site_name" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="{{$setting->site_name}}"/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
                                                    <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{$setting->email}}"/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
                                                    <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Phone</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="mobile" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{$setting->mobile}}" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
                                                    <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Address</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="Address" value="{{$setting->address}}" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
                                                    <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Instagram</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="instagram" class="form-control form-control-lg form-control-solid" placeholder="Instagram link" value="{{$setting->instagram}}" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
                                                    <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Facebook</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="facebook" class="form-control form-control-lg form-control-solid" placeholder="Facebook link" value="{{$setting->facebook}}" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
                                                    
												</div>
												<!--end::Card body-->
												<!--begin::Actions-->
												<div class="card-footer d-flex justify-content-end py-6 px-9">
													<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
													<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Basic info-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->

					
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->

		@include('backend.partial.modal')

        @include('backend.scripts.js_scripts') 

	</body>
	<!--end::Body-->
</html>
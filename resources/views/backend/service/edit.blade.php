<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
  <head><base href=""/>

    @include('backend.scripts.css_scripts')
	 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack ">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Service informations</h1>
										<!--end::Title-->
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
									<!--begin::Form-->
									<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"  method="POST" action="{{route('service.update',$editData->id)}}" enctype="multipart/form-data"> @csrf
										<!--begin::Aside column-->
										<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
											<!--begin::Thumbnail settings-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Service Image</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body text-center pt-0">
													<!--begin::Image input-->
													<!--begin::Image input placeholder-->
													<style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
													<!--end::Image input placeholder-->
													<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-150px h-150px" name="service_icon" ></div>
														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														<label name="service_icon" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change photo">
															<i class="ki-duotone ki-pencil fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<!--begin::Inputs-->
															<input type="file" name="service_icon" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="service_icon" />
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
													<!--begin::Description-->
													<div class="text-muted fs-7">Set the service image. </div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Thumbnail settings-->
											<!--begin::Thumbnail settings-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Current Icon</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body text-center pt-0">
													<!--begin::Image input-->
													<!--begin::Image input placeholder-->
													<style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
													<!--end::Image input placeholder-->
													<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-150px h-150px" name="service_icon" >
														    <img class="image-input-wrapper w-150px h-150px" src="{{asset('frontend/img/service/'.$editData->service_icon)}} ">
														</div>
														<!--end::Preview existing avatar-->
														
													</div>
													<!--end::Image input-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Thumbnail settings-->
										</div>
										<!--end::Aside column-->
										<!--begin::Main column-->
										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
												</li>
												<!--end:::Tab item-->
											</ul>
											<!--end:::Tabs-->
											<!--begin::Tab content-->
											<div class="tab-content">
												<!--begin::Tab pane-->
												<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<!--begin::General options-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>General</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Service Title</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="service_title" class="form-control mb-2" placeholder="Service title" value="{{$editData->service_title}}" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
                                                                <!--begin::Input group-->
																<div class="mb-10 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Short Description</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<textarea type="text" name="short_description" class="form-control mb-2" placeholder="Short Description"  >{{$editData->short_description}}</textarea>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
                                                                <!--begin::Input group-->
																<div class="mb-10 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Button Text</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="button_text" class="form-control mb-2" value="{{$editData->button_text}}" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10 fv-row">
																    <label class="form-label">Full Description</label>
																    <textarea id="service_description_editor" name="service_description" class="form-control mb-2">{{$editData->service_description}}</textarea>
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Card header-->
														</div>
													</div>
												</div>
												<!--end::Tab pane-->
											</div>
											<!--end::Tab content-->
											<div class="d-flex justify-content-end">
												<!--begin::Button-->
												<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
													<span class="indicator-label">Save Changes</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
										<!--end::Main column-->
									</form>
									<!--end::Form-->
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
		<!--end::App-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->

        <script>
    $(document).ready(function() {
        $('#service_description_editor').summernote({
            height: 300, // Set the height of the editor
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        // Ensure the form submit event updates the textarea value
        $('#kt_ecommerce_add_product_form').on('submit', function() {
            $('#service_description_editor').val($('#service_description_editor').summernote('code'));
        });
    });
</script>
 

@include('backend.scripts.js_scripts')

	</body>
	<!--end::Body-->
</html>
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
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<div class="d-flex flex-column flex-column-fluid">
						<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
							<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
								<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
									<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Testimonials List</h1>
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-400 w-5px h-2px"></span>
										</li>
										<li class="breadcrumb-item text-muted">Testimonials Management</li>
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-400 w-5px h-2px"></span>
										</li>
										<li class="breadcrumb-item text-muted">Testimonials</li>
									</ul>
								</div>
							</div>
						</div>
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<div id="kt_app_content_container" class="app-container container-xxl">
								<div class="card">
									<div class="card-header border-0 pt-6">
										<div class="card-title">
											<div class="d-flex align-items-center position-relative my-1">
												<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<input type="text" data-kt-testimonial-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search testimonial" />
											</div>
										</div>
										<div class="card-toolbar">
											<div class="d-flex justify-content-end" data-kt-testimonial-table-toolbar="base">
												<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_testimonial">
													<i class="ki-duotone ki-plus fs-2"></i>Add Testimonial
												</button>
											</div>
											<div class="d-flex justify-content-end align-items-center d-none" data-kt-testimonial-table-toolbar="selected">
												<div class="fw-bold me-5">
													<span class="me-2" data-kt-testimonial-table-select="selected_count"></span>Selected
												</div>
												<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSelectedModal">Delete Selected</button>
											</div>
										</div>
									</div>
<!--begin::Modal - Add Testimonial-->
<div class="modal fade" id="kt_modal_add_testimonial" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_testimonial_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Add Testimonial</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                <form id="kt_modal_add_testimonial_form" class="form" action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_testimonial_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_testimonial_header" data-kt-scroll-wrappers="#kt_modal_add_testimonial_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="d-block fw-semibold fs-6 mb-5">Client Image</label>
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
                                    <input type="file" name="client_image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="image_remove" />
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
                            <label class="required fw-semibold fs-6 mb-2">Client Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="client_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Client name"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Service</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="client_service" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service choosed"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Testimonial text</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea type="text" name="main_text" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Type testimonial" ></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-10">
                        <button type="reset" class="btn btn-light me-3" data-kt-testimonials-modal-action="cancel">Discard</button>
                        <button type="submit" class="btn btn-primary" data-kt-testimonials-modal-action="submit">
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
<!--end::Modal - Add Testimonial-->

<!--begin::Group actions-->
<div class="d-flex justify-content-end align-items-center d-none" data-kt-testimonial-table-toolbar="selected">
    <div class="fw-bold me-5">
        <span class="me-2" data-kt-testimonial-table-select="selected_count"></span>Selected
    </div>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSelectedModal">Delete Selected</button>
</div>
<!--end::Group actions-->

<div class="modal fade" id="deleteSelectedModal" tabindex="-1" aria-labelledby="deleteSelectedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSelectedModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the selected testimonials?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteSelected">Delete</button>
            </div>
        </div>
    </div>
</div>
                                    
<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_testimonials">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_testimonials .form-check-input" value="1" />
                    </div>
                </th>
                <th class="min-w-125px">Client Image</th>
                <th class="min-w-125px">Client Name</th>
                <th class="min-w-125px">Client Service</th>
                <th class="min-w-125px">Testimonial</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            @if(!empty ($allData))
            @foreach ($allData as $testimonial)
                <tr data-testimonial-id="{{ $testimonial->id }}">
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="{{ $testimonial->id }}" />
                        </div>
                    </td>
                    <td>
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="{{ route('testimonial.edit', $testimonial->id) }}">
                                <div class="symbol-label">
                                    <img src="{{ asset('frontend/img/testimonial/'.$testimonial->client_image) }}" alt="{{ $testimonial->client_name }}" class="w-100" />
                                </div>
                            </a>
                        </div>
                    </td>
                    <td>{{ $testimonial->client_name }}</td>
                    <td>{{ $testimonial->client_service }}</td>
                    <td>{{ $testimonial->main_text }}</td>
                    <td class="text-end">
                        <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <i class="ki-duotone ki-pencil fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                        <form action="{{ route('testimonial.delete', $testimonial->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
									<tr>
										<td>No projects founds</td>
									</tr>  
	        @endif
        </tbody>
    </table>
    <!--end::Table-->
</div>
<!--end::Card body-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('backend.scripts.js_scripts')

</body>
</html>

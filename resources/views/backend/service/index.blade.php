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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Team</h1>
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
											<li class="breadcrumb-item text-muted">Service</li>
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
									<!--begin::Products-->
									<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<!--begin::Add product-->
												<a href="{{route('service.create')}}" class="btn btn-primary">Add service</a>
												<!--end::Add product-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
												<thead>
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-200px">Service </th>
														<th class="text-end min-w-100px">Short Description</th>
														<th class="text-end min-w-70px">Actions</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
                                                @foreach($allData as $row)
                                                    <tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{route('service.edit',$row->id)}}" class="symbol symbol-50px">
																	<img src="{{asset('frontend/img/service/'.$row->service_icon)}}" alt="member_image">
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{route('service.edit',$row->id)}}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">{{$row->service_title}}</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">{{$row->short_description}}</span>
														</td>
                                                        <td class="text-end">
															<a class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{route('service.edit',$row->id)}}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{route('service.delete',$row->id)}}" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
									<!--end::Products-->
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
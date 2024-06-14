<?php $confirmed_client= App\Models\ConfirmedClient::all() ?>
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
                        <a href="#" class="link-primary fw-bold">Users Directory</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Users-->
                <div class="mb-15">
                    <!--begin::List-->
                    <div class="mh-375px scroll-y me-n7 pe-7">
                        <!--begin::User-->
					@if(!empty($confirmed_client) )
                        @foreach( $confirmed_client as $row )
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">{{ $row->client_name }}
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">{{ $row->choosed_service }}</span>
                                    </a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-semibold text-muted">{{ $row->client_email }}</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        @endforeach
                        <!--end::User-->
					@else
					<div>No confirmed clients available.</div>
					@endif	
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - View Users-->
<!--begin::Modal - Add task-->
<!-- Add User Modal -->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_user_header">
                <h2 class="fw-bold">Add User</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"></i>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!-- Form -->
                <form id="kt_modal_add_user_form" class="form" method="POST" action="{{route('user.store')}}" enctype="multipart/form-data"> @csrf
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        <!-- Input group for Avatar -->
                        <div class="fv-row mb-7">
                            <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                            <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ asset('backend/img/user/default-avatar.png') }}');"></div>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7"></i>
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="image_remove" />
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2"></i>
                                </span>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2"></i>
                                </span>
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        </div>
                        <!-- Input group for Full Name -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Full Name</label>
                            <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" required />
                        </div>
                        <!-- Input group for Email -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Email</label>
                            <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" required />
                        </div>
                        <!-- Input group for Phone -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Phone</label>
                            <input type="text" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" required />
                        </div>
                        <!-- Input group for Address -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Address</label>
                            <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" required />
                        </div>
                        <!-- Input group for Password -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Password</label>
                            <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0" required />
                        </div>
                        <!-- Input group for Role -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Role</label>
                            <select name="role_id" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-center pt-10">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Add task-->

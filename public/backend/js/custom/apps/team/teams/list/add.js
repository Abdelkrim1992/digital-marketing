"use strict";

var KTModalMembersAdd = function() {
    var submitButton, cancelButton, closeButton, validator, form, modal;

    return {
        init: function() {
            modal = new bootstrap.Modal(document.querySelector("#kt_modal_add_customer"));
            form = document.querySelector("#kt_modal_add_customer_form");
            submitButton = form.querySelector("#kt_modal_add_customer_submit");
            cancelButton = form.querySelector("#kt_modal_add_customer_cancel");
            closeButton = form.querySelector("#kt_modal_add_customer_close");

            // Initialize form validation rules
            validator = FormValidation.formValidation(
                form, {
                    fields: {
                        member_image: {
                            validators: {
                                notEmpty: {
                                    message: "Member image is required"
                                }
                            }
                        },
                        member_name: {
                            validators: {
                                notEmpty: {
                                    message: "Member name is required"
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "Member email is required"
                                },
                                emailAddress: {
                                    message: "The value is not a valid email address"
                                }
                            }
                        },
                        phone: {
                            validators: {
                                notEmpty: {
                                    message: "Phone number is required"
                                }
                            }
                        },
                        member_speciality: {
                            validators: {
                                notEmpty: {
                                    message: "Speciality is required"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                }
            );

            // Handle form submission
            submitButton.addEventListener("click", function(e) {
                e.preventDefault();

                if (validator) {
                    validator.validate().then(function(status) {
                        console.log("validated!");
                        if (status == "Valid") {
                            submitButton.setAttribute("data-kt-indicator", "on");
                            submitButton.disabled = true;

                            // Submit the form using AJAX
                            var formData = new FormData(form);
                            fetch(form.action, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                },
                                body: formData
                            })
                            .then(response => response.json())
                            .then(data => {
                                submitButton.removeAttribute("data-kt-indicator");
                                submitButton.disabled = false;

                                if (data.success) {
                                    Swal.fire({
                                        text: "Form has been successfully submitted!",
                                        icon: "success",
                                        buttonsStyling: true,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then(function(result) {
                                        if (result.isConfirmed) {
                                            modal.hide();
                                            window.location = form.getAttribute("data-kt-redirect");
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        text: data.message || "There was an error submitting the form. Please try again.",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                }
                            })
                            .catch(error => {
                                submitButton.removeAttribute("data-kt-indicator");
                                submitButton.disabled = false;
                                Swal.fire({
                                    text: "There was an error submitting the form. Please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            });
                        } else {
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    });
                }
            });

            // Handle cancel button
            cancelButton.addEventListener("click", function(e) {
                e.preventDefault();

                Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function(result) {
                    if (result.value) {
                        form.reset();
                        modal.hide();
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: "Your form has not been cancelled!",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            });

            // Handle close button
            closeButton.addEventListener("click", function(e) {
                e.preventDefault();

                Swal.fire({
                    text: "Are you sure you would to cancel?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function(result) {
                    if (result.value) {
                        form.reset();
                        modal.hide();
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: "Your form has not been cancelled!",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            });
        }
    };
}();

// Initialize the modal add member functionality on DOMContentLoaded
KTUtil.onDOMContentLoaded(function() {
    KTModalMembersAdd.init();
});

"use strict";

var KTUsersAddUser = function() {
    const modalElement = document.getElementById("kt_modal_add_user");
    const formElement = modalElement.querySelector("#kt_modal_add_user_form");
    const modalInstance = new bootstrap.Modal(modalElement);

    return {
        init: function() {
            (() => {
                var validator = FormValidation.formValidation(formElement, {
                    fields: {
                        member_name: {
                            validators: {
                                notEmpty: {
                                    message: "Full name is required"
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "Valid email address is required"
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
                        },
                        facebook: {
                            validators: {
                                notEmpty: {
                                    message: "Facebook is required"
                                }
                            }
                        },
                        instagram: {
                            validators: {
                                notEmpty: {
                                    message: "Instagram is required"
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
                });

                const submitButton = modalElement.querySelector('[data-kt-users-modal-action="submit"]');

                submitButton.addEventListener("click", (event) => {
                    event.preventDefault();

                    validator.validate().then(function(status) {
                        if (status === "Valid") {
                            submitButton.setAttribute("data-kt-indicator", "on");
                            submitButton.disabled = true;

                            let formData = new FormData(formElement);

                            fetch(formElement.action, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                },
                                body: formData
                            })
                            .then(response => response.json())
                            .then(data => {
                                submitButton.removeAttribute("data-kt-indicator");
                                submitButton.disabled = false;

                                Swal.fire({
                                    text: data.message,
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then(function(result) {
                                    if (result.isConfirmed) {
                                        formElement.reset();
                                        modalInstance.hide();
                                    }
                                });
                            })
                            .catch(error => {
                                submitButton.removeAttribute("data-kt-indicator");
                                submitButton.disabled = false;

                                Swal.fire({
                                    text: "An error occurred while submitting the form. Please try again.",
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
                });

                modalElement.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click", (event) => {
                    event.preventDefault();

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
                            formElement.reset();
                            modalInstance.hide();
                        } else if (result.dismiss === "cancel") {
                            Swal.fire({
                                text: "Your form has not been cancelled!.",
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

                modalElement.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click", (event) => {
                    event.preventDefault();

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
                            formElement.reset();
                            modalInstance.hide();
                        } else if (result.dismiss === "cancel") {
                            Swal.fire({
                                text: "Your form has not been cancelled!.",
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
            })();
        }
    };
}();

KTUtil.onDOMContentLoaded(function() {
    KTUsersAddUser.init();
});

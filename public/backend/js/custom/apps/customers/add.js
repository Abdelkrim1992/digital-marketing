"use strict";

var KTModalCustomersAdd = function () {
    var submitButton, cancelButton, closeButton, form, modal, formValidation;

    // Initialize the modal and form
    var initModal = function () {
        modal = new bootstrap.Modal(document.querySelector("#kt_modal_add_customer"));
        form = document.querySelector("#kt_modal_add_customer_form");
        submitButton = form.querySelector("#kt_modal_add_customer_submit");
        cancelButton = form.querySelector("#kt_modal_add_customer_cancel");
        closeButton = form.querySelector("#kt_modal_add_customer_close");
    };

    // Initialize form validation
    var initFormValidation = function () {
        formValidation = FormValidation.formValidation(form, {
            fields: {
                client_name: { validators: { notEmpty: { message: "Client name is required" } } },
                client_email: { validators: { notEmpty: { message: "Client email is required" } } },
                client_phone: { validators: { notEmpty: { message: "Phone number is required" } } },
                choosed_service: { validators: { notEmpty: { message: "Service is required" } } }
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
    };

    // Handle form submission
    var handleFormSubmit = function () {
        submitButton.addEventListener("click", function (e) {
            e.preventDefault();

            if (formValidation) {
                formValidation.validate().then(function (status) {
                    console.log("validated!");
                    if (status == "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");
                        submitButton.disabled = true;

                        // Perform AJAX request to submit the form
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
                            Swal.fire({
                                text: data.message,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: { confirmButton: "btn btn-primary" }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                    submitButton.disabled = false;
                                    window.location.href = form.getAttribute("data-kt-redirect");
                                }
                            });
                        })
                        .catch(error => {
                            submitButton.removeAttribute("data-kt-indicator");
                            submitButton.disabled = false;
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: { confirmButton: "btn btn-primary" }
                            });
                        });
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: { confirmButton: "btn btn-primary" }
                        });
                    }
                });
            }
        });
    };

    // Handle cancel button click
    var handleCancelClick = function () {
        cancelButton.addEventListener("click", function (e) {
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
            }).then(function (result) {
                if (result.value) {
                    form.reset();
                    modal.hide();
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: { confirmButton: "btn btn-primary" }
                    });
                }
            });
        });
    };

    // Handle close button click
    var handleCloseClick = function () {
        closeButton.addEventListener("click", function (e) {
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
            }).then(function (result) {
                if (result.value) {
                    form.reset();
                    modal.hide();
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: { confirmButton: "btn btn-primary" }
                    });
                }
            });
        });
    };

    return {
        init: function () {
            initModal();
            initFormValidation();
            handleFormSubmit();
            handleCancelClick();
            handleCloseClick();
        }
    };
}();

KTUtil.onDOMContentLoaded(function () {
    KTModalCustomersAdd.init();
});

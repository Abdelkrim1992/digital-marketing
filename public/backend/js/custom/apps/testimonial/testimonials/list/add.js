"use strict";

var KTTestimonialsAddTestimonial = function() {
    const t = document.getElementById("kt_modal_add_testimonial"),
        e = t.querySelector("#kt_modal_add_testimonial_form"),
        n = new bootstrap.Modal(t);

    return {
        init: function() {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        client_name: {
                            validators: {
                                notEmpty: {
                                    message: "Client name is required"
                                }
                            }
                        },
                        client_service: {
                            validators: {
                                notEmpty: {
                                    message: "Client service is required"
                                }
                            }
                        },
                        main_text: {
                            validators: {
                                notEmpty: {
                                    message: "Testimonial text is required"
                                }
                            }
                        },
                        client_image: {
                            validators: {
                                file: {
                                    extension: 'jpeg,jpg,png',
                                    type: 'image/jpeg,image/png',
                                    message: 'The selected file is not valid'
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                });

                const i = t.querySelector('[data-kt-testimonial-modal-action="submit"]');
                i.addEventListener("click", (t => {
                    t.preventDefault();
                    o && o.validate().then((function(t) {
                        console.log("validated!");
                        if (t === "Valid") {
                            i.setAttribute("data-kt-indicator", "on");
                            i.disabled = !0;

                            // Prepare form data
                            var formData = new FormData(e);

                            // Send AJAX request
                            fetch('/testimonials', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                },
                                body: formData
                            })
                            .then(response => response.json())
                            .then(data => {
                                i.removeAttribute("data-kt-indicator");
                                i.disabled = !1;
                                Swal.fire({
                                    text: "Form has been successfully submitted!",
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then((function(t) {
                                    if (t.isConfirmed) {
                                        e.reset();
                                        n.hide();
                                    }
                                }));
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                i.removeAttribute("data-kt-indicator");
                                i.disabled = !1;
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: !1,
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
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    }))
                }));

                t.querySelector('[data-kt-testimonial-modal-action="cancel"]').addEventListener("click", (t => {
                    t.preventDefault();
                    Swal.fire({
                        text: "Are you sure you would like to cancel?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, cancel it!",
                        cancelButtonText: "No, return",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: "btn btn-active-light"
                        }
                    }).then((function(t) {
                        t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                            text: "Your form has not been cancelled!.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                }));

                t.querySelector('[data-kt-testimonial-modal-action="close"]').addEventListener("click", (t => {
                    t.preventDefault();
                    Swal.fire({
                        text: "Are you sure you would like to cancel?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, cancel it!",
                        cancelButtonText: "No, return",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: "btn btn-active-light"
                        }
                    }).then((function(t) {
                        t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                            text: "Your form has not been cancelled!.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                }))
            })()
        }
    }
}();

KTUtil.onDOMContentLoaded((function() {
    KTTestimonialsAddTestimonial.init()
}));
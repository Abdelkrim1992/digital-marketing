"use strict";
var KTUsersAddUser = function() {
    const t = document.getElementById("kt_modal_add_user"),
        e = t.querySelector("#kt_modal_add_user_form"),
        n = new bootstrap.Modal(t);

    return {
        init: function() {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        user_name: {
                            validators: {
                                notEmpty: {
                                    message: "Full name is required"
                                }
                            }
                        },
                        user_email: {
                            validators: {
                                notEmpty: {
                                    message: "Valid email address is required"
                                },
                                emailAddress: {
                                    message: "The input is not a valid email address"
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

                const i = t.querySelector('[data-kt-users-modal-action="submit"]');
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
                            fetch('/users', {
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

                t.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click", (t => {
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

                t.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click", (t => {
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
    KTUsersAddUser.init()
}));


const deleteSelectedButton = document.querySelector('[data-kt-user-table-select="delete_selected"]');
deleteSelectedButton.addEventListener("click", function() {
    const selectedCheckboxes = document.querySelectorAll('#kt_table_users tbody input[type="checkbox"]:checked');
    const selectedUserIds = Array.from(selectedCheckboxes).map(checkbox => checkbox.value);

    if (selectedUserIds.length === 0) {
        Swal.fire({
            text: "Please select at least one user to delete.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
        return;
    }

    Swal.fire({
        text: "Are you sure you want to delete the selected user(s)?",
        icon: "warning",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel",
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: "btn btn-active-light"
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Send AJAX request to delete selected users
            fetch('/users/delete', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ user_ids: selectedUserIds })
            })
            .then(response => {
                if (response.ok) {
                    // Reload the page or update the user list
                    location.reload(); // Reload the page
                    // You can also remove the deleted users from the DOM without reloading the page
                } else {
                    throw new Error('Failed to delete selected users');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    text: "Failed to delete selected users. Please try again later.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        }
    });
});
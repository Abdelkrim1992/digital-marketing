"use strict";
var KTCustomersList = function() {
    var table, datatable, rowSelector, deleteButton;

    var initDeleteRow = () => {
        rowSelector.querySelectorAll('[data-kt-customer-table-filter="delete_row"]').forEach(button => {
            button.addEventListener("click", function(event) {
                event.preventDefault();
                const row = event.target.closest("tr");
                const clientName = row.querySelectorAll("td")[1].innerText;
                const clientId = row.getAttribute('data-client-id'); // assuming you have set data-client-id attribute

                Swal.fire({
                    text: "Are you sure you want to delete " + clientName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: '/confirmed-clients/' + clientId,
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                Swal.fire({
                                    text: "You have deleted " + clientName + "!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    }
                                }).then(function() {
                                    datatable.row($(row)).remove().draw();
                                });
                            },
                            error: function(response) {
                                Swal.fire({
                                    text: clientName + " was not deleted.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    }
                                });
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: clientName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        });
                    }
                });
            });
        });
    };

    var initDeleteSelected = () => {
        const checkboxes = rowSelector.querySelectorAll('[type="checkbox"]');
        const deleteButton = document.querySelector('[data-kt-customer-table-select="delete_selected"]');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener("click", function() {
                setTimeout(() => updateDeleteButton(), 50);
            });
        });

        deleteButton.addEventListener("click", function() {
            const selectedCheckboxes = rowSelector.querySelectorAll('tbody [type="checkbox"]:checked');
            const clientIds = Array.from(selectedCheckboxes).map(checkbox => checkbox.closest("tr").getAttribute('data-client-id'));
            
            if (clientIds.length === 0) {
                Swal.fire({
                    text: "No customers selected.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary"
                    }
                });
                return;
            }

            Swal.fire({
                text: "Are you sure you want to delete selected customers?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: '/confirmed-clients/delete-multiple',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: { client_ids: clientIds },
                        success: function(response) {
                            Swal.fire({
                                text: "You have deleted all selected customers!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            }).then(function() {
                                selectedCheckboxes.forEach(checkbox => {
                                    datatable.row($(checkbox.closest("tbody tr"))).remove().draw();
                                });
                                document.querySelector('[type="checkbox"]').checked = false;
                            });
                        },
                        error: function(response) {
                            Swal.fire({
                                text: "Selected customers were not deleted.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            });
                        }
                    });
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Selected customers were not deleted.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    });
                }
            });
        });
    };

    var updateDeleteButton = () => {
        const toolbarBase = document.querySelector('[data-kt-customer-table-toolbar="base"]');
        const toolbarSelected = document.querySelector('[data-kt-customer-table-toolbar="selected"]');
        const selectedCount = document.querySelector('[data-kt-customer-table-select="selected_count"]');
        const checkboxes = rowSelector.querySelectorAll('tbody [type="checkbox"]');

        let hasChecked = false;
        let count = 0;

        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                hasChecked = true;
                count++;
            }
        });

        if (hasChecked) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add("d-none");
            toolbarSelected.classList.remove("d-none");
        } else {
            toolbarBase.classList.remove("d-none");
            toolbarSelected.classList.add("d-none");
        }
    };

    return {
        init: function() {
            rowSelector = document.querySelector("#kt_customers_table");
            if (!rowSelector) return;

            rowSelector.querySelectorAll("tbody tr").forEach(row => {
                const cells = row.querySelectorAll("td");
                const formattedDate = moment(cells[5].innerHTML, "DD MMM YYYY, LT").format();
                cells[5].setAttribute("data-order", formattedDate);
            });

            datatable = $(rowSelector).DataTable({
                info: false,
                order: [],
                columnDefs: [
                    { orderable: false, targets: 0 },
                    { orderable: false, targets: 5 }
                ]
            });

            datatable.on("draw", function() {
                initDeleteSelected();
                initDeleteRow();
                updateDeleteButton();
                KTMenu.init();
            });

            initDeleteSelected();

            document.querySelector('[data-kt-customer-table-filter="search"]').addEventListener("keyup", function(event) {
                datatable.search(event.target.value).draw();
            });

            const monthFilter = $('[data-kt-customer-table-filter="month"]');
            const paymentTypeFilters = document.querySelectorAll('[data-kt-customer-table-filter="payment_type"] [name="payment_type"]');

            document.querySelector('[data-kt-customer-table-filter="filter"]').addEventListener("click", function() {
                const monthValue = monthFilter.val();
                let paymentTypeValue = "";

                paymentTypeFilters.forEach(filter => {
                    if (filter.checked) {
                        paymentTypeValue = filter.value;
                    }
                    if (paymentTypeValue === "all") {
                        paymentTypeValue = "";
                    }
                });

                const filterValue = monthValue + " " + paymentTypeValue;
                datatable.search(filterValue).draw();
            });

            document.querySelector('[data-kt-customer-table-filter="reset"]').addEventListener("click", function() {
                monthFilter.val(null).trigger("change");
                paymentTypeFilters[0].checked = true;
                datatable.search("").draw();
            });
        }
    };
}();

KTUtil.onDOMContentLoaded(function() {
    KTCustomersList.init();
});

"use strict";

var KTUsersList = function () {
    var e, t, n, r, o = document.getElementById("kt_table_users"),
        c = function () {
            o.querySelectorAll('[data-kt-users-table-filter="delete_row"]').forEach((function (t) {
                t.addEventListener("click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        r = n.querySelectorAll("td")[1].querySelectorAll("a")[1].innerText;
                    Swal.fire({
                        text: "Are you sure you want to delete " + r + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function (t) {
                        if (t.value) {
                            const t = n.dataset.memberId;
                            deleteMember(t);
                        } else "cancel" === t.dismiss && Swal.fire({
                            text: r + " was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
                    }))
                }))
            }))
        },
        l = function () {
            const c = o.querySelectorAll('[type="checkbox"]');
            t = document.querySelector('[data-kt-user-table-toolbar="base"]');
            n = document.querySelector('[data-kt-user-table-toolbar="selected"]');
            r = document.querySelector('[data-kt-user-table-select="selected_count"]');
            const s = document.querySelector('[data-kt-user-table-select="delete_selected"]');
            c.forEach((e => {
                e.addEventListener("change", (function () {
                    setTimeout((function () {
                        a()
                    }), 50)
                }))
            })), s.addEventListener("click", (function () {
                var selectedIds = [];
                $('[type="checkbox"]:checked').each(function () {
                    var memberId = $(this).closest('tr').data('member-id');
                    selectedIds.push(memberId);
                });

                Swal.fire({
                    text: "Are you sure you want to delete selected members?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.isConfirmed) {
                        deleteSelectedMembers(selectedIds);
                    }
                });
            }))
        },
        a = function () {
            const e = o.querySelectorAll('[type="checkbox"]');
            let c = !1,
                l = 0;
            e.forEach((e => {
                e.checked && (c = !0, l++)
            })), c ? (r.innerHTML = l, t.classList.add("d-none"), n.classList.remove("d-none")) : (t.classList.remove("d-none"), n.classList.add("d-none"))
        };

        function deleteMember(memberId) {
            $.ajax({
                url: '/team/' + memberId,
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response); // Log success response if needed
                    $('[data-member-id="' + memberId + '"]').remove(); // Remove deleted member from UI
                    Swal.fire({
                        text: "Member has been deleted successfully!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    });
                },
                error: function (xhr) {
                    console.error(xhr.responseText); // Log error response for debugging
                    Swal.fire({
                        text: "Failed to delete member. Please try again later.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    });
                }
            });
        }
        
        function deleteSelectedMembers(ids) {
            $.ajax({
                url: '/team/delete-selected',
                type: 'POST',
                data: {
                    ids: ids
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response); // Log success response if needed
                    ids.forEach(function (id) {
                        $('[data-member-id="' + id + '"]').remove(); // Remove deleted members from UI
                    });
                    KTUsersList.init(); // Reinitialize datatable after deletion
                    Swal.fire({
                        text: "Selected members have been deleted successfully!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    });
                },
                error: function (xhr) {
                    console.error(xhr.responseText); // Log error response for debugging
                    Swal.fire({
                        text: "Failed to delete selected members. Please try again later.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    });
                }
            });
        }

    return {
        init: function () {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td"),
                    n = t[3].innerText.toLowerCase();
                let r = 0,
                    o = "minutes";
                n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                const c = moment().subtract(r, o).format();
                t[3].setAttribute("data-order", c);
                const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                t[5].setAttribute("data-order", l)
            })), (e = $(o).DataTable({
                info: !1,
                order: [],
                pageLength: 10,
                lengthChange: !1,
                columnDefs: [{
                    orderable: !1,
                    targets: 0
                }, {
                    orderable: !1,
                    targets: 5
                }]
            })).on("draw", (function () {
                l(), c(), a()
            })), l(), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function (t) {
                e.search(t.target.value).draw()
            })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function () {
                document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select").forEach((e => {
                    $(e).val("").trigger("change")
                })), e.search("").draw()
            })), c(), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                    n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                    r = t.querySelectorAll("select");
                n.addEventListener("click", (function () {
                    var t = "";
                    r.forEach(((e, n) => {
                        e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                    })), e.search(t).draw()
                }))
            })()), l(), a()
        }
    }
}();


// Initialize after DOM loaded
KTUtil.onDOMContentLoaded((function () {
    KTUsersList.init();
}));

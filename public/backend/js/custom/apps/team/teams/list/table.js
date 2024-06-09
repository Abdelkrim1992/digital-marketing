"use strict";

var KTTeamList = function () {
    var table,
        selectedIds = [];

    var initTable = function () {
        table = $('#kt_table_teams').DataTable({
            info: false,
            order: [],
            pageLength: 10,
            lengthChange: false,
            columnDefs: [{
                orderable: false,
                targets: [0, 4]
            }]
        });

        // Toggle delete selected button visibility
        table.on('select deselect', function () {
            var selectedRows = table.rows({ selected: true }).count();
            if (selectedRows > 0) {
                $('[data-kt-team-table-toolbar="selected"]').removeClass('d-none');
            } else {
                $('[data-kt-team-table-toolbar="selected"]').addClass('d-none');
            }
        });
    };

    var handleDeleteRow = function () {
        $('[data-kt-team-table-filter="delete_row"]').on('click', function () {
            var row = $(this).closest('tr');
            var teamId = row.data('team-id');
            var member_mame = row.find('td:nth-child(2)').text();

            Swal.fire({
                text: "Are you sure you want to delete " + member_mame + "?",
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
                if (result.value) {
                    deleteRow(row, teamId);
                }
            });
        });
    };

    var deleteRow = function (row, teamId) {
        // Your delete row logic here

        // Remove row from the table
        table.row(row).remove().draw();

        // Remove member ID from selectedIds array if it exists
        var index = selectedIds.indexOf(teamId);
        if (index !== -1) {
            selectedIds.splice(index, 1);
        }
    };

    var handleDeleteSelected = function () {
        $('#confirmDeleteSelected').on('click', function () {
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
                if (result.value) {
                    deleteSelected();
                }
            });
        });
    };

    var deleteSelected = function () {
        // Your delete selected logic here

        // Remove rows from the table
        selectedIds.forEach(function (teamId) {
            var row = table.row('[data-team-id="' + teamId + '"]').node();
            table.row(row).remove();
        });

        // Clear selectedIds array
        selectedIds = [];

        // Hide delete selected button
        $('[data-kt-team-table-toolbar="selected"]').addClass('d-none');
    };

    return {
        init: function () {
            initTable();
            handleDeleteRow();
            handleDeleteSelected();
        }
    };
}();

KTUtil.onDOMContentLoaded(function () {
    KTTeamList.init();
});

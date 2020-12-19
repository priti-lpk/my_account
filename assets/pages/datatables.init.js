/*
 Template Name: Agroxa - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Datatable js
 */

//$(document).ready(function() {
////    $('#datatable').DataTable();
//
//    //Buttons examples
//    var table = $('#datatable-buttons').DataTable({
//        lengthChange: false,
//        buttons: ['copy', 'excel', 'pdf',  'print','colvis']
//    });
//
//    table.buttons().container()
//        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
//});

//remove last column

$(document).ready(function () {
    var table = $('#datatable-buttons').DataTable({

        lengthChange: false,
        orientation: 'landscape',
        pageSize: 'A0',
        buttons: ['copy', 'excel',
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    columns: ':visible',
                    stripHtml: true
                   

                },
                customize: function (doc) {

                    doc.styles.tableHeader.alignment = 'center';
                    doc.styles.tableBodyEven.alignment = 'center';
                    doc.styles.tableBodyOdd.alignment = 'center';
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    visible: false
                }
            },
            'colvis'
        ]

    });


    table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});
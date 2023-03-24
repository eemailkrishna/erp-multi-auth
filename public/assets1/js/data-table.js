// npm package: datatables.net-bs5
// github link: https://github.com/DataTables/Dist-DataTables-Bootstrap5

// $(function() {
//   'use strict';

//   $(function() {
//     $('#dataTableExample').DataTable({
//       "aLengthMenu": [
//         [10, 30, 50, -1],
//         [10, 30, 50, "All"]
//       ],
//       "iDisplayLength": 10,
//       "language": {
//         search: ""
//       }
//     });
//     $('#dataTableExample').each(function() {
//       var datatable = $(this);
//       // SEARCH - Add the placeholder for Search and Turn this into in-line form control
//       var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
//       search_input.attr('placeholder', 'Search');
//       search_input.removeClass('form-control-sm');
//       // LENGTH - Inline-Form control
//       var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
//       length_sel.removeClass('form-control-sm');
//     });
//   });

// });

// $(document).ready(function () {
//   // Setup - add a text input to each footer cell
//   $('#dataTableExample tfoot th').each(function () {
//       var title = $(this).text();
//       $(this).html('<input type="text" placeholder="Search ' + title + '" />');
//   });

// $(document).ready( function () {
//     // $('#dataTableExample').DataTable();


//   // DataTable
//   var table = $('#dataTableExample').DataTable({              
//       initComplete: function () {
//           // Apply the search
//           this.api()
//               .columns()
//               .every(function () {
//                   var that = this;

//                   $('input', this.footer()).on('keyup change clear', function () {
//                       if (that.search() !== this.value) {
//                           that.search(this.value).draw();
//                       }
//                   });
//               });
//       },
//   });
// });

  $(document).ready(function () {
    $('#dataTableExample').DataTable({
        // paging: false,
        ordering: false,
        // info: false,
    });
});
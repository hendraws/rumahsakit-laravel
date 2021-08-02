// Call the dataTables jQuery plugin
// $(document).ready(function() {
//   $('#dataTable').DataTable();
// });

$(document).ready(function () {
  $('#duaKolom').DataTable({
    dom: 'lfBrtip',
    buttons: [
      {
        extend: 'copyHtml5',
        exportOptions: {
          columns: [0, 1]
        }
      },
      {
        extend: 'excelHtml5',
        exportOptions: {
          columns: [0, 1]
        }
      },
      {
        extend: 'pdfHtml5',
        exportOptions: {
          columns: [0, 1]
        },
        download: 'open'
      },
      {
        extend: 'print',
        exportOptions: {
          columns: [0, 1]
        },
        autoPrint: false
      }
    ]
  });

   $('#dataTable').DataTable({
       "bInfo": true,
       scrollY: '250',
       dom: 'lfBrtip',
       buttons: [{
               extend: 'copyHtml5',
               exportOptions: {
                   columns: [0, 1, 2, 3, 4]
               }
           },
           {
               extend: 'excelHtml5',
               exportOptions: {
                   columns: [0, 1, 2, 3, 4]
               }
           },
           {
               extend: 'pdfHtml5',
               exportOptions: {
                   columns: [0, 1, 2, 3, 4]
               },
               download: 'open'
           },
           {
               extend: 'print',
               exportOptions: {
                   columns: [0, 1, 2, 3, 4]
               },
               autoPrint: false
           }
       ]
   });

   $('#rekamMedis').DataTable({
       "order": [[0, "desc"]],
       "bInfo": true,
       scrollY: '250',
       dom: 'lfBrtip',
       buttons: [{
               extend: 'copyHtml5',
               exportOptions: {
                   columns: [0, 1, 2, 3, 4, 5, 6]
               }
           },
           {
               extend: 'excelHtml5',
               exportOptions: {
                   columns: [0, 1, 2, 3, 4, 5, 6]
               }
           },
           {
               extend: 'pdfHtml5',
               exportOptions: {
                   columns: [0, 1, 2, 3, 4, 5, 6]
               },
               download: 'open'
           },
           {
               extend: 'print',
               exportOptions: {
                   columns: [0, 1, 2, 3, 4, 5, 6]
               },
               autoPrint: false
           }
       ]
   });

  $(document).ready(function () {
    $.fn.dataTable.ext.search.push(
      function (settings, data, dataIndex) {
        var min = $('#min').datepicker("getDate");
        var max = $('#max').datepicker("getDate");
        var startDate = new Date(data[0]);
        if (min == null && max == null) { return true; }
        if (min == null && startDate <= max) { return true; }
        if (max == null && startDate >= min) { return true; }
        if (startDate <= max && startDate >= min) { return true; }
        return false;
      }
    );


    $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    var table = $('#rekamMedis').DataTable();

    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').change(function () {
      table.draw();
    });
  });


});
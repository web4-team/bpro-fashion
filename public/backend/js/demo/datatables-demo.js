// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    dom: 'Bfrtip',
        buttons: [

             'csv', 'excel', 'pdf', 'print'
        ],
        columnDefs: [{
      targets: [2,6,7,8,9,10], visible: false
    }]

    });
});



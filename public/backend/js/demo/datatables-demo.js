// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    dom: 'Bfrtip',
    
    lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
      
        
        buttons: [
        

             { extend: 'pdfHtml5', text: '<i class="fas fa-file-pdf " aria-hidden="true">PDF</i>',orientation: 'landscape',
                pageSize: 'A4',  exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
                }, className:'pdfButton' },
                 
             { extend: 'excel', text: '<i class="fas fa-file-excel" aria-hidden="true">Excel</i>' ,className:'excelButton'},
              { extend: 'pageLength',className:'page'}
        ],
        columnDefs: [{
      targets: [2,6,7,8,9,10], visible: false
    }]



    });
});



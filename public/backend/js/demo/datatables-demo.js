$(document).ready(function() {
  $('#dataTable').DataTable( {
  dom: 'Bfrtip',
  
  buttons: [ {
  extend: 'colvis',
  text: '<i class="fa fa-columns" aria-hidden="true"></i> <b>Column</b>',
  className:'colButton',
  },
  
  { extend: 'pdfHtml5',
  text: '<i class="fas fa-file-pdf btn-danger" aria-hidden="true"></i> <b>PDF</b>',
  orientation: 'landscape',
  pageSize: 'A4',
  className:'pdfButton',
  exportOptions: {
    columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
    }
  },
  
  { extend: 'excel',
  text: '<i class="fas fa-file-excel" aria-hidden="true"></i> <b>Excel</b>' ,
  className:'excelButton',
  exportOptions: {
    columns: [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13 ]
    }
  },
  
  ],
  // columnDefs: [{targets: [1,3], visible: false}]
  
  // buttons: [
  // 'colvis','excel', 'pdf', 'print'
  // ]
  columnDefs: [{
    targets: [5,6,7,8,9,10,11,12,13], visible: false
    }],
  
    
  } );
  } );

  

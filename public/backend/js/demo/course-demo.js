// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#course').DataTable( {
        dom: 'Bfrtip',
        
        buttons: [{ 
              extend: 'colvis',
              text: '<i class="fa fa-columns" aria-hidden="true"></i> <b>Column</b>',
              className:'colvis',
              exportOptions: {
                      columns: [ 0,1,2,3,4,5,6,7 ],
                            }
            },

            { extend: 'pdfHtml5', 
              text: '<i class="fas fa-file-pdf btn-danger" aria-hidden="true"></i> <b>PDF</b>',
              
              pageSize: 'A4',
              className:'pdf',
              exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7 ],
                }
            },

            { extend: 'excel', 
              text: '<i class="fas fa-file-excel" aria-hidden="true"></i> <b>Excel</b>' ,
              className:'excel',
              exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7 ],
                }
            },
                               
        ],
        columnDefs: [{targets: [6,7], visible: false}],

    } );
} );

// columnText: function ( dt, idx, title ) {
//                 return (idx+1)+': '+title;
//             }

// buttons: [
        //     'colvis','excel', 'pdf', 'print'
        // ]
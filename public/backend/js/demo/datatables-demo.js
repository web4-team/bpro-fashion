$(document).ready(function() {
    $('#dataTable').DataTable( {
        dom: 'Bfrtip',
        
        buttons: [ 
            { extend: 'colvis',
              text: '<i class="fa fa-columns" aria-hidden="true"></i> <b>Column</b>',
              className:'colButton',
              exportOptions: {
                      columns: [ 0,1,2,3,4,8, ],
                            }
          	},

            { extend: 'pdfHtml5', 
              text: '<i class="fas fa-file-pdf btn-danger" aria-hidden="true"></i> <b>PDF</b>',
              orientation: 'landscape',
              pageSize: 'A4',
              className:'pdfButton',
              exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10,11 ],
                }
          	},

          	{ extend: 'excel', 
          	  text: '<i class="fas fa-file-excel" aria-hidden="true"></i> <b>Excel</b>' ,
          	  className:'excelButton',
              exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10,11 ],
                }
            },
            { extend: 'pageLength',
            className:'page'},
            
            
                               
        ],

        columnDefs: [{targets: [5,6,7,9,10,11], visible: false}],
        'pagingType':'full_numbers',

        

    } );
} );

// columnText: function ( dt, idx, title ) {
//                 return (idx+1)+': '+title;
//             }

// buttons: [
        //     'colvis','excel', 'pdf', 'print'
        // ]


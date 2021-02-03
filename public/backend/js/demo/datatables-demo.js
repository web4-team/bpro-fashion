$(document).ready(function() {

// <<<<<<< HEAD
//   $('#dataTable').DataTable({
//     dom: 'Bfrtip',
    
//     lengthMenu: [
//             [ 10, 25, 50, -1 ],
//             [ '10 rows', '25 rows', '50 rows', 'Show all' ]
//         ],
      
        
//         buttons: [
        

//              { extend: 'pdfHtml5', text: '<i class="fas fa-file-pdf " aria-hidden="true">PDF</i>',orientation: 'landscape',
//                 pageSize: 'A4',  exportOptions: {
//                     columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
//                 }, className:'pdfButton' },
                 
//              { extend: 'excel', text: '<i class="fas fa-file-excel" aria-hidden="true">Excel</i>' ,className:'excelButton'},
//               { extend: 'pageLength',className:'page'}
//         ],
//         columnDefs: [{
//       targets: [2,6,7,8,9,10], visible: false
//     }]



//     });
// });

// =======

    $('#dataTable').DataTable( {
        dom: 'Bfrtip',
        
        buttons: [ 
            { extend: 'colvis',
              text: '<i class="fa fa-columns" aria-hidden="true"></i> <b>Column</b>',
              className:'colButton',
              exportOptions: {
                      columns: [ 0,1,2,3,4,5 ],
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

        columnDefs: [{targets: [6,7,8,9,10,11,12,13,14], visible: false}],
        'pagingType':'full_numbers',

                 "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 5)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 5 ).footer() ).html(
                'Ks '+pageTotal +' ( Ks '+ total +' total)'
            );
        }

        

    } );
} );

// columnText: function ( dt, idx, title ) {
//                 return (idx+1)+': '+title;
//             }

// buttons: [
        //     'colvis','excel', 'pdf', 'print'
        // ]




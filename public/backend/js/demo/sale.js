// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#sale').DataTable( {
        dom: 'Bfrtip',
        
        buttons: [{ 
              extend: 'colvis',
              text: '<i class="fa fa-columns" aria-hidden="true"></i> <b>Column</b>',
              className:'salecolvis',
               exportOptions: {
                      columns: [ 0,1,2,3 ],
                            }
              
            },


            { extend: 'excel', 
              text: '<i class="fas fa-file-excel" aria-hidden="true"></i> <b>Excel</b>' ,
              className:'saleexcel',
              
            },
            { extend: 'pageLength',
            className:'page'},
                               
        ],
       columnDefs: [{targets: [4,5,6,8,9], visible: false}],

    } );
} );

// columnText: function ( dt, idx, title ) {
//                 return (idx+1)+': '+title;
//             }

// buttons: [
        //     'colvis','excel', 'pdf', 'print'
        // ]
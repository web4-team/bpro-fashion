// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#exp').DataTable( {
        dom: 'Bfrtip',
        
        buttons: [


            { extend: 'excel', 
              text: '<i class="fas fa-file-excel" aria-hidden="true"></i> <b>Excel</b>' ,
              className:'expexcel',
              
            },
            { extend: 'pageLength',
            className:'page'},
                               
        ],
       

    } );
} );

// columnText: function ( dt, idx, title ) {
//                 return (idx+1)+': '+title;
//             }

// buttons: [
        //     'colvis','excel', 'pdf', 'print'
        // ]
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
            .column( 4)
            .data()
            .reduce( function (a, b) {
            return intVal(a) + intVal(b);
            }, 0 );
            
            // Total over this page
            pageTotal = api
            .column( 4, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
            return intVal(a) + intVal(b);
            }, 0 );
            
            // Update footer
            $( api.column( 4).footer() ).html(
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
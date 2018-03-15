$(document).ready(function () {

    var UserTable = $('#myTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "/fetchuserByAjax",
         rowId: 'id',
        // "order": [],  // removing Order

        // place holder to the default Search Box ( The one in the Top Right corner)
        language: {
            // search: "_INPUT_",
            searchPlaceholder: "Search By Name"
        },

        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,     // hiding Column
                "searchable": false,
                "orderable": false  // disabling Orderable
            },
            {
                "targets": [ 1 ],
                "orderable": false
            },
            {
                "targets": [ 2 ],
                "orderable": false
            },
            {
                "targets": [ 3 ],
                "orderable": false
            },
            {
                "targets": [ 4 ],
                "orderable": true
            },

        ],
    });


    // adding a Search Field In the bottom every Column except Address
    $('#myTable tfoot th').each( function () {
        var title = $('#myTable thead th').eq( $(this).index() ).text();
        if(title != 'Name'){
            $(this).html( '<input type="text" placeholder="Search by '+title+'" />' );
        }

    } );


    UserTable.columns().every( function () {
        var column = this;
        $( 'input', this.footer() ).on( 'keyup change', function () {
            column
                .search( this.value )
                .draw();
        } );
    } )



});
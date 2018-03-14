$(document).ready(function () {

    var UserTable = $('#myTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "/fetchuserByAjax",
        "order": [[ 0, "desc" ]]
    });


    // adding a Search Field In every Column except Address
    $('#myTable tfoot th').each( function () {
        var title = $('#myTable thead th').eq( $(this).index() ).text();
        console.log(title);
        if(title != 'Address'){
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data-Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Basic Table</h2>
    {{--<p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>--}}
    <table id="myTable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Created Date</th>
            </tr>
        </thead>

        {{--<tbody>--}}
        {{--@foreach ($tempResult as $row)--}}
            {{--<tr>--}}
                {{--<td>{{ $row['name'] }}</td>--}}
                {{--<td>{{ $row['address'] }}</td>--}}
                {{--<td>{{ $row['phonenumber'] }}</td>--}}
                {{--<td>{{ $row['created_at'] }}</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}

        <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
        </tfoot>
    </table>
</div>

</body>
</html>

<script src="{{ asset('customjs/view.js') }}" > </script>

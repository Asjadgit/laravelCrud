<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr align="center">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $employee)
                <tr align="center">
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->Name}}</td>
                    <td>{{$employee->Email}}</td>
                    <td>{{$employee->Address}}</td>
                    <td>
                        <a href="{{route('data.edit',['id'=>$employee->id])}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('data.delete',['id'=>$employee->id])}}">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JavaScript and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

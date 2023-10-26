<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="{{route('data.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" class="form-control" placeholder="Enter email" id="mail" name="mail">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" placeholder="Enter address" id="address" name="address">
            </div>

            <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
    </div>

    <!-- Include Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

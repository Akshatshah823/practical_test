<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Table View</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            margin-top: 20px;
            font-weight: bold;
        }

        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background-color: #f8f9fa;
            color: #343a40;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td img {
            border-radius: 50%;
        }

        .btn {
            padding: 8px 12px;
            margin: 5px;
            font-size: 14px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        /* Mobile responsive table */
        @media (max-width: 767px) {
            table {
                font-size: 12px;
            }

            th, td {
                padding: 10px;
            }
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4CAF50;">
        <a class="navbar-brand" href="#">Employee Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('add/employee') }}">Add Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('display/employee') }}">All Employees</a>
                </li>
            </ul>
        </div>
    </nav>
    <h2>User Information</h2>

    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Hobby</th>
                    <th>Photo</th>
                    <th>Gender</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($employee as $emp)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $emp->first_name }}</td>
                        <td>{{ $emp->last_name }}</td>
                        <td>{{ $emp->country_code . $emp->mobile }}</td>
                        <td>{{ $emp->email }}</td>
                        <td>{{ $emp->address }}</td>
                        <td>{{ $emp->hobbies }}</td>
                        <td><img src="{{ asset('storage/photo/' . $emp->photo) }}" alt="Employee Photo" width="60" height="60"></td>
                        <td>{{ $emp->gender }}</td>
                        <td>
                            <a href="{{ route('editEmployee', $emp->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('deleteEmployee', $emp->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                        @php $i++ ; @endphp
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

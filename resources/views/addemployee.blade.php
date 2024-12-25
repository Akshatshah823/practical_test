<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <!-- Bootstrap CSS for Styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        h2 {
            color: #4CAF50;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"], input[type="email"], input[type="file"], select, textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input[type="radio"], input[type="checkbox"] {
            margin-top: 8px;
        }

        .btn {
            font-size: 16px;
            padding: 10px 20px;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .hobby-label {
            margin-right: 20px;
        }

        .gender-radio {
            margin-right: 20px;
        }

        .form-control-file {
            padding: 0;
        }

        .form-group input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            padding: 12px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #218838;
        }

        /* Responsive Design */
        @media (max-width: 767px) {
            .container {
                padding: 20px;
            }
            .btn {
                width: auto;
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
    <div class="container">
        <h2>Add Employee Information</h2>
        <form method="POST" action="{{ route('addEmployee') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="country_code">Mobile No.:</label>
                <select id="country_code" name="country_code" required>
                    <option>+91 (India)</option>
                    <option>+92 (Pakistan)</option>
                    <option>+93 (Afghanistan)</option>
                </select>
                <input type="text" id="mobile" name="mobile" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <div class="gender-radio">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </div>
            </div>

            <div class="form-group">
                <label for="hobby">Hobbies:</label>
                <div class="hobby-label">
                    <input type="checkbox" id="cricket" name="hobby[]" value="cricket">
                    <label for="cricket">Cricket</label>

                    <input type="checkbox" id="reading" name="hobby[]" value="reading">
                    <label for="reading">Reading</label>

                    <input type="checkbox" id="writing" name="hobby[]" value="writing">
                    <label for="writing">Writing</label>

                    <input type="checkbox" id="coding" name="hobby[]" value="coding">
                    <label for="coding">Coding</label>

                    <input type="checkbox" id="movie" name="hobby[]" value="movie">
                    <label for="movie">Movie</label>
                </div>
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>

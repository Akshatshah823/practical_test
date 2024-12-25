<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container mt-5">
        <h2 class="text-center text-brown mb-4">Employee Information Form</h2>
        <form method="POST" action="{{ route('update', $editEmployee->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name: </label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $editEmployee->first_name }}" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name: </label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $editEmployee->last_name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $editEmployee->email }}" required>
            </div>

            <div class="form-group">
                <label for="country_code">Country Code:</label>
                <select id="country_code" name="country_code" class="form-control" value="{{ $editEmployee->country_code }}" required>
                    <option value="+91" {{ $editEmployee->country_code == '+91' ? 'selected' : '' }}>+91 (India)</option>
                    <option value="+92" {{ $editEmployee->country_code == '+92' ? 'selected' : '' }}>+92 (Pakistan)</option>
                    <option value="+93" {{ $editEmployee->country_code == '+93' ? 'selected' : '' }}>+93 (Afghanistan)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile No:</label>
                <input type="text" id="mobile" name="mobile" class="form-control" value="{{ $editEmployee->mobile }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address: </label>
                <textarea id="address" name="address" class="form-control" rows="4" required>{{ $editEmployee->address }}</textarea>
            </div>

            <div class="form-group">
                <label>Gender: </label><br>
                <input type="radio" id="male" name="gender" value="male" {{ $editEmployee->gender == 'male' ? 'checked' : '' }}> <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" {{ $editEmployee->gender == 'female' ? 'checked' : '' }}> <label for="female">Female</label>
            </div>

            <div class="form-group">
                <label>Hobbies: </label><br>
                <input type="checkbox" id="cricket" name="hobby[]" value="cricket" {{ in_array('cricket', old('hobbies', $hobbies)) ? 'checked' : '' }}> <label for="cricket">Cricket</label>
                <input type="checkbox" id="reading" name="hobby[]" value="reading" {{ in_array('reading', old('hobbies', $hobbies)) ? 'checked' : '' }}> <label for="reading">Reading</label>
                <input type="checkbox" id="writing" name="hobby[]" value="writing" {{ in_array('writing', old('hobbies', $hobbies)) ? 'checked' : '' }}> <label for="writing">Writing</label>
                <input type="checkbox" id="coding" name="hobby[]" value="coding" {{ in_array('coding', old('hobbies', $hobbies)) ? 'checked' : '' }}> <label for="coding">Coding</label>
                <input type="checkbox" id="movie" name="hobby[]" value="movie" {{ in_array('movie', old('hobbies', $hobbies)) ? 'checked' : '' }}> <label for="movie">Movie</label>
            </div>

            <div class="form-group">
                <label for="photo">Photo: </label>
                <input type="file" id="photo" name="photo" class="form-control-file">
                <div class="mt-2">
                    <img src="{{ asset('storage/photo/' . $editEmployee->photo) }}" alt="Employee Photo" width="100" height="100">
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Update Employee</button>
            </div>
        </form>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4CAF50;
            font-weight: 700;
        }

        label {
            font-size: 14px;
            font-weight: bold;
        }

        .form-control, .form-control-file {
            margin-bottom: 15px;
        }

        .form-group input[type="radio"], .form-group input[type="checkbox"] {
            margin-right: 5px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .mt-2 {
            margin-top: 10px;
        }

        .text-brown {
            color: #8B4513;
        }
    </style>
</body>
</html>

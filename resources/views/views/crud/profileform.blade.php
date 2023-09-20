<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .profile-image {
            text-align: center;
        }

        .profile-image img {
            width: 150px;
            border-radius: 50%;
        }

        .profile-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .profile-form label {
            font-weight: bold;
        }

        .profile-form .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container text-danger text-center">
        <div class="card">
        <h5> Profile Setting </h5>
        </div>
    </div>
<div class="container">
    <div class="profile-form">
        <form  action="{{route('profile')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <label for="user_email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="email" class="form-control" name="email" required>
                </div>
            </div>
            <div class="col-12">
                <label for="user_profile" class="form-label">Profile Image URL</label>
                <input type="file" class="form-control"  name="profile"  required>
            </div>
            <div class="col-12 p-1">
                <button class="btn btn-primary" type="submit">Submit Form</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

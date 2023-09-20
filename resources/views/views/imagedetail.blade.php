<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/imagedetail.css')}}">
</head>

<body>
    <!-- Imagedetail -->
    <div class="card">
        <img src="{{ asset($books->image) }}" class="card-img">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $books['title'] }}</h5>
            <p class="card-text">Description: {{ $books['description'] }}</p>
            <div class="button-box">
                <button class="four"><a href="{{route('index')}}">Back</a></button>
            </div>
        </div>
    </div>
    <!-- end imagedetail -->
</body>
</html>

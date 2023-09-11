<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{asset('css/crud.view.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">

                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $books->title }}">

                <div class="mb-1">
                    <label for="author" class="form-label">Author:</label>
                    <input type="text" class="form-control" name="author" value="{{ $books->author }}">

                </div>
                <div class="mb-1">
                    <label for="description" class="form-label">Description:</label>s
                    <input type="text" name="description" class="form-control" value="{{ $books->description }}">

                </div>
                <div class="mb-1">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" name="price" value="{{ $books->price }}">

                </div>
                <div class="mb-1">
                    <img src="{{ asset($books->image) }}" width="20%" height="40%">
                </div>

                <div class="btn-submit  p-1">
                    <a href="{{route('show_data')}}" class="btn btn-dark" type="submit">Back</a>

                </div>
            </div>
        </div>
    </div>

</body>
</html>

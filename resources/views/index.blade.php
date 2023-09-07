<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 mb-4">
                    <img src="{{asset('storage/tLCLz5DR36orgFche7wobpS3XDdwIUvQMzMki4iN.png')}}">
                    <img src="{{asset('storage/ZhczoQ19jnTGxkIrzYvqEPlAnEmjcS3UKUnipIhq.png')}}" width="60%" height="40%">
                    <div class="card">
                     
                    
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="book-{{ $book->id }}-like" class="like-icon-div-child">
                                    <input type="checkbox" id="book-{{ $book->id }}-like">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-fill"></i>
                                </label>
                                <form action="{{ route('addlist') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                                    <button class="btn btn-dark">Add to Cart</button>
                                    <a href="home" class="btn btn-outline-primary">Back </a>
                                    <a href="order" class="btn btn-danger">Buy Now</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div
</body>

</html>

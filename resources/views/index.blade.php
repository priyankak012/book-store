<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    {{-- <?php
    use App\Http\Controllers\BookController;
    $total = Bookcontroller::cartiteam();
?> --}}

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Book-store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link animated" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link animated" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Books</a>
                    </li>
                </ul>
                <form class="d-flex" action="/search" method="get">
                    <input class="form-control me-2" type="text" placeholder="Search"  name="query">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                  <i class="fa" style="font-size:24px">&#xf07a;</i>
                  {{-- <span> {{$total}} </span> --}}
                <form class="d-flex">
                    @if (Session::has('user'))
                        <div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle " href="#" id="navbarDarkDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Session::get('user')['username'] }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="logout">Log out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @else
                        <li><a href="login" class="btn btn-dark"></a></li>
                    @endif
                </form>
            </div>
        </div>
    </nav>
   <!-- end navbar -->

   <!-- fetch data  display -->
    <div class="container mt-5">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="{{ route('imagedetail', ['id' => $book['id']]) }}">
                            <img src="{{ asset($book->image) }}" height="60%" width="40%">
                        </a>            
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="book-{{ $book->id }}-like" class="like-icon-div-child">
                                  
                                    
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-fill"></i>
                                </label>  
                                <form action="{{ route('cartlist') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                                    <button class="btn btn-dark btn-sm">Add to Cart</button>
                                    <a href="order" class="btn btn-danger btn-sm">Buy Now</a>
                                    <a href="home" class="btn btn-outline-primary btn-sm">Back </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
    </div>
<!-- end data -->
<script>
const likeIcon = document.querySelector('.like-icon-div-child');

likeIcon.addEventListener('click', function() {
    const heartEmpty = this.querySelector('.heart-empty');
    heartEmpty.style.color = 'red'; // Change the color to red when clicked
});
</script>

</body>
</html>

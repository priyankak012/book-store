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
   <!-- Carousel Image slidebar -->
   <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top:3%">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner bg-dark">
          <div class="carousel-item active">
            <img src="https://www.softwaretestinghelp.com/wp-content/qa/uploads/2022/01/fantasy.jpg" class="" alt="..." style="height:20%" width="40%">
            <div class="text-center">
            <i class="text-light">Children.s literature comprises those books written and published for young people who are not yet interested in adult literature or who may not possess the reading skills or developmental understandings necessary for its perusal.</i>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.softwaretestinghelp.com/wp-content/qa/uploads/2022/01/gone_girl_books_fb.jpg" class="" alt="..."  style="height:10%" width="40%">
            <div class="text-center">
            <i class="text-light">Cookbooks are a collection of recipes, instructions, and information about the preparation and serving of foods. A cookbook is also a chronicle and treasury of the fine art of cooking which would otherwise be lost. Cookbooks may be written by individual authors, who may be chefs, cooking teachers, or other food writers; they may be written by collectives, or they may be anonymous. They may be addressed to home cooks, professional restaurant cooks, institutional cooks, or more specialized audiences.</i>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUS_F3RJAbjRBlEFhbPwT9jDsHQ7CpmhUhCw&usqp=CAU" class="" alt="..."  style="height:10%" width="40%">
            <div class="text-center">
            <i class="text-light">Fiction implies the inventive construction of an imaginary world and, most commonly, its fictionality is publicly acknowledged. Hence, its audience typically expects it to deviate in some ways from the real world rather than presenting only characters who are actual people or portrayals that are factually true.</i>
            </div>
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section><br><br><br>
<!-- Image slider Ended -->

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

<!-- footer -->
<footer class="footer">
    <div class="footer-left col-md-4 col-sm-6">
      <p class="about">
        <span> About the company</span> Ut congue augue non tellus bibendum, in varius tellus condimentum. In scelerisque nibh tortor, sed rhoncus odio condimentum in. Sed sed est ut sapien ultrices eleifend. Integer tellus est, vehicula eu lectus tincidunt,
        ultricies feugiat leo. Suspendisse tellus elit, pharetra in hendrerit ut, aliquam quis augue. Nam ut nibh mollis, tristique ante sed, viverra massa.
      </p>
    </div>
    <div class="footer-center col-md-4 col-sm-6">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span> Street name and number</span> City, Country</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p> (+00) 0000 000 000</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#"> office@company.com</a></p>
      </div>
    </div>
    <div class="footer-right col-md-4 col-sm-6">
      <p class="menu">
        <a href="#"> Home</a> |
        <a href="#"> About</a> |
        <a href="#"> Services</a> |
        <a href="#"> Portfolio</a> |
        <a href="#"> News</a> |
        <a href="#"> Contact</a>
      </p>
      <p class="name"> Company Name &copy; 2016</p>
    </div>
  </footer>
  <!-- end footer -->

<script>
const likeIcon = document.querySelector('.like-icon-div-child');

likeIcon.addEventListener('click', function() {
    const heartEmpty = this.querySelector('.heart-empty');
    heartEmpty.style.color = 'red'; // Change the color to red when clicked
});
</script>

</body>
</html>

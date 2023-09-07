<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
   integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/book.css') }}">
    <title>Sign up Today!</title>
</head>

<body>
    <!-- Navbar -->
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle animated" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Contact</a></li>
                            <li><a class="dropdown-item" href="registration">Registration</a></li>
                            <li><a class="dropdown-item" href="login">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Books</a>
                    </li>
                </ul>
                {{-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> --}}
            </div>
        </div>
    </nav>
    @if(Session::has('login_success'))
    <script>
   swal("Well Done", "Login is Successfully", "login_success");
        </script>
    @endif
    {{-- <img src="{{ asset(str_replace('public', 'storage', $book->image)) }}"> --}}
    
    <div class="overlay"></div>
    <p class="logo">Online Book-store</p>
    <div class="right-container">
        <h4>Herbology 101</h4>
        <p>Register Book to receive the detail of Book .</p>
        <div class="button-sbmit">
            <a href="bookdetail" class="btn btn-dark">Click here</a>
        </div>
    </div>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js
    "></script>
        </body> 
        </html>

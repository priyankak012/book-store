<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

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
                            <li><a class="dropdown-item" href="login">Login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Books</a>
                    </li>
                </ul>
                <form class="d-flex" action="/search" method="get">
                  <input class="form-control me-2" type="text" placeholder="Search"  name="query">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
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
    <!-- Navbar End -->

    <!--Display Title -->
    
        @if (Session::has('Remove_cart'))
            <script>
                swal("Done", "You have successfully removecart", "success");
            </script>
        @endif
    <div class="panel">
        <h3>Online Book-shop</h3>
    </div>
    <!-- Title End -->

    <!-- Cartlist Display data -->
    @foreach ($books as $index => $book)
        <div class="card">
            <div class="card-header">
                {{ $book->title }}
            </div>
            <div class="card-body">
                <table class="table">
                    <tr class="text-center">
                        <th>Number</th>
                        <th>Image</th>
                        <th>Book Author</th>
                        <th>Price</th>
                        <th>Tax</th>
                        <th>Delivery charge</th>
                    </tr>
                    <tr class="text-center">
                        <td>{{ $index + 1 }}</td>
                        <td><img src="{{ asset($book->image) }}" width="20%" width="20%"></td>
                        <td>
                            <p>Book Author: {{ $book->author }}</p>
                        </td>
                        <td>
                            <p>Price: {{ $book->price }}</p>
                        </td>
                        <td>
                            <p> Tax: 10$ </p>
                        </td>
                        <td>
                            <p> Delivery charge : 100$ only</p>
                        </td>
                    </tr>
                </table>
                <div class="card-footer text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="30" viewBox="0 0 512 512">
                        <a xlink:href="index">
                          <path d="M48,256c0,114.87,93.13,208,208,208s208-93.13,208-208S370.87,48,256,48,48,141.13,48,256Zm224-80.09L208.42,240H358v32H208.42L272,336.09,249.3,358.63,147.46,256,249.3,153.37Z"/>
                        </a>
                      </svg>    
                    <a href="cartlist/{{ $book->cart_id }}" class="btn btn-outline-dark">Remove Cart</a>
                    <a href="order" class="btn btn-outline-danger float-end">Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
                <!-- End cartlist data -->
</body>
</html>
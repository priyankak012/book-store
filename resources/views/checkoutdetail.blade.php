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
    <link rel="stylesheet" href="{{ asset('css/checkoutdetail.css') }}">
    <title>Document</title>
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
                <i class="fa" style="font-size:24px">&#xf07a;</i>

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
    <section class="contact-sec sec-pad mb-10">

        <div class="flex-container">

            @if ($checkoutdetails)
                <div class="flex-item-right">
                    <div class="flex-item-left">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvpu7THvK3F2RGfcRh7vRhJGmBU0d5NQ76XshYKgKKD-BA_GuYkUllBKIEsuucq-6cYM0&usqp=CAU"
                            alt="una ciudad en mexico" style="width:30%" height="50%" />
                    </div>

                    <h2>{{ $checkoutdetails->username }}</h2>
                    <hr>
                    <h2>{{ $checkoutdetails->email }}</h2>

                    <p>City address:{{ $checkoutdetails->address }}<br></p>
                    <hr>
                    <p>Card no :{{ $checkoutdetails->cardnumber }}</p>
                    <hr>
                    <h2>{{ $checkoutdetails->city }}</h2>
                    <p>{{ $checkoutdetails->address }}</p>
                    <p>{{ $checkoutdetails->zip }}</p>
                    <hr>
                    <form class="row g-3" action="{{route('send.email')}}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label  class="form-label">Email</label>
                            <input type="email" class="form-control"   name="email">
                        </div>
                        <div class="col-md-6">
                            <label  class="form-label">phone no </label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                           <button class="btn btn-dark">Submit</button>
                        {{-- <a href="success" class="btn btn-dark">Submit </a> --}}
                    </form>
    </section>
    </div>
    @endif
    </div>


    {{-- @if ($registration->order)
    <section>
     <p>{{$registration->order->payment_status}}</p>
    </section>
    @endif --}}
</body>

</html>

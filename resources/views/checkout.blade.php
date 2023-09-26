<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
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
    <h1>Responsive Checkout Form</h1>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="{{route('checkout_post')}}" method="post">
                   @csrf
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                        
                            <label for="username"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" name="username"  value="{{old('username')}}">
                            @if ($errors->has('username'))
                            <div class="alert alert-danger">{{ $errors->first('username') }}</div>
                        @endif
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                        @endif
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" value="{{old('address')}}" >
                            @if ($errors->has('address'))
                            <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                        @endif

                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" value="{{old('city')}}">
                            @if ($errors->has('city'))
                            <div class="alert alert-danger">{{ $errors->first('city') }}</div>
                        @endif
                            <div class="row">
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="number" id="zip" name="zip" class="form-control" value="{{old('zip')}}">
                                    @if ($errors->has('zip'))
                                    <div class="alert alert-danger">{{ $errors->first('zip') }}</div>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" value="{{old('cardnumber')}}">
                            @if ($errors->has('cardnumber'))
                            <div class="alert alert-danger">{{ $errors->first('cardnumber') }}</div>
                        @endif
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September" value="{{old('expmonth')}}">
                            @if ($errors->has('expmonth'))
                            <div class="alert alert-danger">{{ $errors->first('expmonth') }}</div>
                        @endif
                            <div class="row">
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="number" id="cvv" name="cvv" placeholder="352" value="{{old('cvv')}}">
                                    @if ($errors->has('cvv'))
                            <div class="alert alert-danger">{{ $errors->first('cvv') }}</div>
                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-submit">
                        <button class="btn" type="submit">Click </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

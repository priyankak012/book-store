<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
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


<!-- order form -->
    <div class="card">
        <div class="card-top border-bottom text-center">
            <a href="#"> Back to shop</a>
            <span id="logo">Order Book</span>
        </div>
        <div class="card-body">
            <div class="row upper">
                <span><i class="fa fa-check-circle-o"></i> Buy Book</span>
                <span><i class="fa fa-check-circle-o"></i> Order details</span>
                <span id="payment"><span id="three">3</span>Payment</span>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="left border">
                        <div class="row">
                            <span class="header">Payment</span>
                            <div class="icons">
                                <img src="https://img.icons8.com/color/48/000000/visa.png" />
                                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
                                <img src="https://img.icons8.com/color/48/000000/maestro.png" />
                            </div>
                        </div>
                        <form action='orderplace' method="POST">
                            @csrf
                             <span class="text-dark">Cardholder's detail:</span>
                            <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror" placeholder="enter your address">
                             @error('address')
                                 <span class="text-danger">{{$message}}</span>
                             @enderror
                             <br>
                            <span class="text-dark">Online Pyment:</span>
                            <input class="form-check-input" type="radio" value="Online Pyment" name="payment" class="@error('payment') is-invalid @enderror">
                            <span class="text-dark"> Emi Pyment:</span>
                            <input class="form-check-input" type="radio" value="EMI payment" name="payment">
                            <span class="text-dark">Cash On delivery:</span>
                            <input class="form-check-input" type="radio" value="Cash on delivery" name="payment">
                            @error('payment')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                            <div class="row">
                                <div class="col-4"><span>Description :</span>
                                    <input placeholder="">
                                </div>
                                <div class="col-4"><span>Daute</span>
                                    <input id="cvv">
                                </div>
                            </div>
                            <input type="checkbox" id="save_card" class="align-left">
                            <label for="save_card">Save card details to wallet</label>
                            <button class="btn btn-dark" type="submit">Confirm order </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="right border">
                        <div class="header">Order Summary</div>
                        <div class="row item">
                            <div class="col-4 align-self-center">
                            </div>
                            <div class="col-8">
                                <div class="row text-muted"> “Books are mirrors: you only see in them what you already
                                    have inside you.”
                                </div>
                                <div class="row">Qty:1</div>
                            </div>
                        </div>
                        
                        <div class="row lower">
                            <div class="col text-left">Subtotal</div>
                            <div class="col text-right">$ {{ $total }}</div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left">Tax</div>
                            <div class="col text-right">$ 10 </div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left">Delivery Charge</div>
                            <div class="col text-right">$ 100 </div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left"><b>Total to pay</b></div>
                            <div class="col text-right"><b> $ {{ $total + 10 + 100 }}</b></div>
                        </div>
                        <a href="checkout" class="btn btn-dark">Place order</a>
                        <p class="">Complimentary Shipping & Returns</p>

                      

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end order form -->
</body>
</html>

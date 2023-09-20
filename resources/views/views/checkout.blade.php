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
        {{-- <div class="col-25">
            @foreach ($carts as $cart)
                <div class="container">
                    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>
                            <b>4</b></span></h4>
                    <p><a href="{{ route('cartlist', ['id', $cart->id]) }}">Product 1</a> <span
                            class="price">$15</span></p>
                    <p><a href="{{ route('cartlist', ['id', $cart->id]) }}">Product 2</a> <span class="price">$5</span>
                    </p>
                    <p><a href="{{ route('cartlist', ['id', $cart->id]) }}">Product 3</a> <span class="price">$8</span>
                    </p>
                    <p><a href="{{ route('cartlist', ['id', $cart->id]) }}">Product 4</a> <span class="price">$2</span>
                    </p>
                    <hr>
                    @endforeach
                </div>
        </div> --}}
    </div>
</body>
</html>

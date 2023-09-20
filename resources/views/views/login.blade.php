<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="{{asset('css/registration.css')}}">
 
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
        </div>
    </div>
</nav>
<!-- navbar ended -->

        @if(Session::has('success'))
        <script>
       swal("Well Done", "Registration is Successfully", "success");
            </script>
        @endif
       @if(Session::has('error'))
       <script>
    swal("Try again", "User password does not match", "error");
        </script>
        @endif

<!-- login form -->
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card card-signin flex-row my-5">
                        <div class="card-img-left d-none d-md-flex">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-label-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                     value="{{old('email')}}">
                                <label for="email">Email</label>
                                @error('email')
                                <span class="text-danger">{{ $message}}</span>
                                    
                                @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="">
                                    <label for="password">password</label>
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button  class="btn btn-dark"  type="submit" name="submit"> Login </button><br>
                                <p class="p-1"> if you doesn't have  registration !<i> <a href="registration"> click here </i> </a></p>
                                <p class="float-end">Forget  password ? <a href="resetpassword">click here !</a> </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login form ended -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js
"></script>
</body>
    </html>
                            
  
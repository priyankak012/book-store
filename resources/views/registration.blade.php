<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
    <title>Book Store</title>
</head>
<body>
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Book-store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link dropdown-toggle animated" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Select
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Contact</a></li>
              <li><a class="dropdown-item" href="registration">Registration</a></li>
              <li><a class="dropdown-item" href="login">Login</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle animated" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Select
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="admin.login">Admin</a></li>
              <li><a class="dropdown-item" href="#">User</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Books</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<!-- end navbar -->
<!-- registration form -->
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card card-signin flex-row my-5">
                        <div class="card-img-left d-none d-md-flex">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Register</h5>
                            <form action="{{ route('storedata') }}" method="post">
                                @csrf
                                <div class="form-label-group">
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror"
                                        value="{{ old('username') }}">
                                    <label for="username">Username</label>
                                    @error('username')
                                        <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="email" name="email"
                                        class="form-control  @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                    @error('email')
                                        <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="number" name="phone"
                                        class="form-control  @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}">
                                    <label for="phone">phone</label>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="password" name="password"
                                        class="form-control  @error('password') is-invalid @enderror" value="">
                                    <label for="password">Password</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="password_confirmation"
                                        class="form-control  @error('password') is-invalid @enderror">
                                    <label for="password">Confirm password</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="btn-submit">
                                    <button class="btn btn-dark" type="submit"> Registration </button>
                                </div>
                                <p class="float-end"> if account already login<a href="login">click here !</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end ragistration form -->
</body>
</html>

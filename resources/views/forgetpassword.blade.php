<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/forgetpassword.css') }}">

</head>

<body>
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
    <!-- forget password form -->

    <div class="mainDiv mb-1">
        <div class="cardStyle">
            <form action="{{route('forgetpassword.post')}}" method="post">
                @csrf

                <img src="" id="signupLogo" />
                <h2 class="formTitle">
                    New password
                </h2>

                <div class="inputDiv">
                    <label class="inputLabel" for="email">User Email</label>
                    <input type="email" id="email" name="email">
                    @error('email')
                        <span class="text-danger"></span>
                    @enderror
                </div>

                <div class="inputDiv">
                    <label class="inputLabel" for="password">New Password</label>
                    <input type="password" id="password" name="password">
                    @error('password')
                        <span class="text-danger"></span>
                    @enderror
                </div>

                <div class="inputDiv">
                    <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword">
                    @error('password')
                        <span class="text-danger"></span>
                    @enderror
                </div>

                <div class="buttonWrapper">
                    <button type="submit">
                        Click
                    </button>
                </div>

            </form>
        </div>
    </div>
    <!-- form end -->


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
</body>

</html>

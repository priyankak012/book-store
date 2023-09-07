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
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
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
    <div class="panel">
        <h3>Online Book-shop</h3>
    </div>
    @foreach ($books as $index=>$book)
       
    <div class="card">
        <div class="card-header">
          {{$book->title}}
        </div>
        <div class="card-body">
          <table class="table">
            <tr class="text-center">
              <th>Number</th>
              <th>Image</th>
              <th>Book Author</th>
              <th>Book Quality</th>
              <th>Price</th>
              <th>Tax</th>
              <th>Delivery charge</th>
            </tr>
            <tr class="text-center">
                <td>{{ $index + 1 }}</td>
              <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKL6o3hAkp37XqNpgLfI_FANJOBPvx6sLDZEvWPXkKy2rBAIA4Cw-ASyACpiwjSgDo9H4&usqp=CAU" style="height: 120px"></td>
              <td>
                <p>Book Author: {{$book->author}}</p>
              </td>
              <td>
                <p>Book Quality: (Insert Book Quality Here)</p>
              </td>
              <td>
                <p>Price: {{$book->price}}</p>
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
            <a href="/cartlist/{{ $book->cart_id }}" class="btn btn-outline-dark">Remove Cart</a>
            <a href="order" class="btn btn-outline-danger float-end">Buy Now</a>
<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
    check Detail
  </button>
          </div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$book->title}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-title"> {{$book->title}}</div><br>
           {{$book->author}}<br>
           {{$book->description}}<br>
           {{$book->price}}<br>
           <img src= {{asset("images/" .$book->image)}}>
           {{$book->image}}<br>
            <p>Book : "Show me a family of readers, and I will show you the people who move the world." – Napoleon Bonaparte </p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="order" type="button" class="btn btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
        </div>
    </div>    
    @endforeach
</body>
</html>

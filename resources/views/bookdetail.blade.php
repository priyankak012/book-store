<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Add Book Detail</title>
</head>

<body style="background-color: #f0f0f052;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">Book-store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link animated" href="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link animated" href="About">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle animated" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
            </div>
        </div>
    </nav>

 
         @if(Session::has('store'))
        <script>
       swal("Data Added Successfully");
       
            </script>
        @endif

       
    <section>
        <h2 id="Home">
    <div class="card mb-3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfm5BKpKfNJcK4Cyy9XQMPqNX7DBuAGnecYg&usqp=CAU"  style="height:400px" width="100%">
    </div>
    <div class="card">
        <div class="card-header">
          Quote
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0 text-dark fw-bolder">
            <p>
                "One glance at a book and you hear the voice of another person, perhaps someone dead for 1,000 years. To read is to voyage through time."</p>
            <footer class="blockquote-footer">– Carl Sagan.</footer>
          </blockquote>
        </div>
    </div>
        </h2>
    </section>
    <h5 class="card-title text-center mt-4 " style="left: ">Add Book Detail</h5>
    <div class="row p-1">
        <div class="col-sm-6">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH1a1vjSpsQxJZwD9HJ3VRAD6uIj-TqIo_vg&usqp=CAU"
                    class="card-img-top" alt="Image" style="height: 300px;">
                <div class="card-body">
                    <h5 class="card-title">Special Title Treatment</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget justo eu justo tincidunt euismod.</p>
                    <a href="#" class="btn btn-primary">Go Somewhere</a>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
                <form action="{{ route('bookstore') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{ old('title') }}">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <div class="mb-1">
                        <label for="author" class="form-label">Author:</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author"
                            value="{{ old('author') }}">
                        @error('author')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                            value="{{ old('description') }}">
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                            value="{{ old('price') }}">
                        @error('price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="image" class="form-label">Upload Image:</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   
                    <div class="btn-submit  p-1">
                        <button class="btn btn-dark" type="submit"> Click here </button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

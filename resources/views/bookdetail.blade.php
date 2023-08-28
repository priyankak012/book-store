
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
        <link rel="stylesheet" href="{{ asset('css/book-detail.css') }}">
        <title>Document</title>
    </head>
    <body>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://t4.ftcdn.net/jpg/04/27/15/07/240_F_427150774_oRGazNTpO6Bh381JJ5IVU5huEI462Mag.jpg">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://t3.ftcdn.net/jpg/04/27/15/08/240_F_427150853_Zt2TWw0AdibU3lXwH4lv88JdYomYIWhi.jpg"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://t3.ftcdn.net/jpg/04/27/15/08/240_F_427150821_oQOZiOLP6lnWQdUmUG0YgQiTUsjmaGwE.jpg"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 
              <h5 class="card-title text-center">Book Detail</h5>
        <main>
            <div class="container">
                <form action="{{route('bookstore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-label-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control @error('title') is-invalid  @enderror" name="title" value="{{old('title')}}">
                        @error('title')
                        <span class="text-danger">{{ $message}}</span> @enderror
                    </div>
                    <div class="form-label-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{old('author')}}">
                        @error('author')
                            <span class="text-danger">{{ $message}} </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
                        @error('description')
                            <span class="text-danger">{{ $message}} </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid   
                        @enderror" name="price" value="{{old('price')}}">
                        @error('price')
                        <span class="text-danger">{{ $message}} </span>  
                        @enderror
                    </div>
                    <div class="form-label-group">
                        <label for="image">Upload-image</label>
                        <input type="file" class="form-control @error('image') is-invalid
                            @enderror" name="image" value="{{old('image')}}">
                    </div>
                    <button class="btn btn-dark" type="submit" name="submit">Add Book</button>
                </form>
            </div>
        </main>
    </body>
    </html>


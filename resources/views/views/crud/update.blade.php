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
    <link rel="stylesheet" href="{{asset('css/crud_update.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('crud_updates', ['id' => $books->id]) }}"  onsubmit="return validation();">
            @csrf
            @method('PUT')
    
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-1">
                                <input type="hidden" name="_method" value="PUT">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') ?? ($books->title ?? '') }}" id="title">
                                <div id="error_title" class="text-danger"></span></div>
                            </div>
                            <div class="mb-1">
                                <label for="author" class="form-label">Author:</label>
                                <input type="text" class="form-control" name="author" value="{{old('author') ?? ($books->author ?? '') }}" id="author">
                                <div id="error_author" class="text-danger"></div>
                                
                            </div>
                            <div class="mb-1">
                                <label for="description" class="form-label">Description:</label>
                                <input type="text" name="description" class="form-control" value="{{ old('description') ??($books->description ??'') }}" id="description">
                                <div id="error_description" class="text-danger"></div>
                                
                            </div>
                            <div class="mb-1">
                                <label for="price" class="form-label">Price:</label>
                                <input type="number" class="form-control" name="price" value="{{ old('price') ?? ($books->price ??'') }}" id="price">
                                <div id="error_price" class="text-danger"></div>
                                
                            </div>
                            <div class="mb-1">
                                <img src="{{ asset($books->image) }}" alt="Book Image" id="image">
                            </div>
    
                            <div class="btn-submit">
                                <button class="btn btn-dark" type="submit">update</button>
                            </div>
                        </div>
                    </div>
                </div>

        </form>
    </div>
    <script>
       function validation() {
        var title = document.getElementById("title");
        var errorTitle = document.getElementById("error_title");

        var author = document.getElementById("author");
        var errorauthor = document.getElementById("error_author");

        var description = document.getElementById("description");
        var errordescription = document.getElementById("error_description");

        var price = document.getElementById("price");
        var errorprice = document.getElementById("error_price");


        if (title.value.trim() === "") {
            errorTitle.innerHTML = "Enter a title";
            return false;
        } else {
            errorTitle.innerHTML = "";
        }

        if (author.value.trim() === "") {
            errorauthor.innerHTML = "Enter a autor";
            return false;
        } else {
            errorauthor.innerHTML = "";
        }
        if (description.value.trim() === "") {
            errordescription.innerHTML = "Enter a description";
            return false;
        } else {
            errordescription.innerHTML = "";
        }
        if (price.value.trim() === "") {
            errorprice.innerHTML = "Enter a price";
            return false;
        } else {
            errorprice.innerHTML = "";
        }
           
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Active Books</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">Number</th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Author</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">View</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <thead class="thead-dark">
                                    <tbody>
                                        @foreach ($books as $index => $book)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $book->title }}</td>
                                            <td>{{ $book->author }}</td>
                                            <td>{{ $book->description }}</td>
                                            <td>{{ $book->price }}</td>
                                            <td><a href="{{ route('imagedetail', ['id' => $book['id']]) }}">
                                            <img src="{{asset($book->image)}}" width="40%" height="50%"
                                            </a></td>
                                            <td><a href= "{{route('crud.view',$book->id)}}" class="btn btn-dark">View</a></td>
                                            
                                            <form action="{{route('crud_updates',$book->id)}}" method="POST">
                                                @csrf
                                                @method('PUT') 
                                                
                                                <td><a href="{{ route('crud_edit', $book->id) }}" class="btn btn-primary">Edit</a></td>
                                                <td> <a href="{{route('crud_delete',$book->id)}}" class="btn btn-danger">Delete</a></td>
                                            </form>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


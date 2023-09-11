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
                                        <th class="text-center">number</th>
                                        <th>user_id</th>
                                        <th>book_id</th>
                                        <th class="text-center">View</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $index => $carts)
                                    <tr>
                                        <td class="text-center">{{$index + 1}}</td>
                                        <td>{{$carts->book_id}}</td>
                                        <td class="text-center">{{$carts->user_id}}</td>
                                        <td class="text-center">
                                            <a href="{{route('cart_view',$carts->id)}}" class="btn btn-info btn-sm">View</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td class="text-center">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('cart_delete',$carts->id)}}" type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
.detail-img
{
    margin-top:10%;
    height: 120%;
}
.detail-display
{
     margin-top: 30%; 
}
</style>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{$book['image']}}" alt="" class="detail-img">
            </div>
            <div class="col-sm-6">
                <div class="detail-display">
                <h5>Name :{{ $book['title']}}</h5>
                <h5>price :{{ $book['description']}}</h5>
                <h6>category :{{ $book['author']}}</h6>
                <h6>description :{{ $book['price']}}</h6>
               </div>
            </div>
    </div>
    </div>
</body>
@endsection


</body>
</html>
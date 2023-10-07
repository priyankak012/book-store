<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="stylesheet" href="{{asset('css/cartlist.css')}}">

    </head>
<body>
    <!-- Navbar code goes here -->
    <!-- Your existing navbar code -->

    <!-- Display Title -->
    @if (Session::has('Remove_cart'))
        <script>
            swal("Done", "You have successfully removed the item from the cart", "success");
        </script>
    @endif
    <div class="panel">
        <h3>Online Book-shop</h3>
    </div>
    <!-- Title End -->

    <!-- Cartlist Display data -->

<div id="message-box" class="message-box"></div>

    @if(count($books) > 0)
        <div class="card">
            <div class="card-header">
                Cart Summary
            </div>
            <div class="card-body">
                <table class="table">
                    <tr class="text-center">
                        <th>Number</th>
                        <th>Image</th>
                        <th>Book Author</th>
                        <th>Price</th>
                    </tr>
                    @php
                        $totalPrice = 0;
                        $totalTax = 0;
                        $totalDeliveryCharge = 0;
                    @endphp
                    @foreach ($books as $index => $book)
                        <tr class="text-center">
                            <td>{{ $index + 1 }}</td>
                            <td><img src="{{ asset($book->image) }}" width="10%" width="20%"></td>
                            <td>
                                <p>Book Author: {{ $book->author }}</p>
                            </td>
                            <td>
                                <p>Price: {{ $book->price }}</p>
                            </td>
                        </tr>
                        @php
                            $totalPrice += $book->price;
                            $totalTax += 10;
                            $totalDeliveryCharge += 100;
                        @endphp
                    @endforeach
                </table>

                <div class="card-footer">
                    <p>Total Price: {{ $totalPrice }}</p>
                    <p>Total Tax: {{ $totalTax }}</p>
                    <p>Total Delivery Charge: {{ $totalDeliveryCharge }}</p>
                    <p>Total Amount: {{ $totalPrice + $totalTax + $totalDeliveryCharge }}</p>

                    <a href="cartlist/{{ $book->cart_id }}" class="btn btn-outline-dark">Remove Cart</a>
                    <a href="order" class="btn btn-outline-danger">Buy Now</a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="30" viewBox="0 0 512 512">
            <a xlink:href="index">
                <path d="M48,256c0,114.87,93.13,208,208,208s208-93.13,208-208S370.87,48,256,48,48,141.13,48,256Zm224-80.09L208.42,240H358v32H208.42L272,336.09,249.3,358.63,147.46,256,249.3,153.37Z"/>
            </a>
        </svg>
        @else
        <div class="card">
            <div class="card-header">
                No items in the cart
            </div>
            <div class="card-body">
                <p>Your cart is empty.</p>
            </div>
        </div>
    @endif
</body>
</html>

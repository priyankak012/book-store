<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
    <script
      src="https://kit.fontawesome.com/d92630495d.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- datafetch with searchbar -->
    @foreach ($books as $book )
    <main>
      <img src="{{asset($book->image)}}">
      <div id="cart-text">
        <button class="free-shipping">Free shipping</button>
        <h2>{{$book->title}}</h2>
        <h3>$ 1.599,00</h3>
        <h1>{{$book->price}}</h1>
        <h4>{{$book->description}}</h4>
        <a href="cartlist">
        <button class="add-to-cart">Add to Cart</button>
        </a>
        <h3 class="stock">
          <i class="fa-solid fa-circle"></i> 50+ pcs. in stock.
        </h3>

        <div id="buttons">
          <button class="add-to-cart-2">
            <i class="fa-solid fa-cart-shopping"></i> Add to Cart
          </button>
          <button class="add-to-wishlist">
            <i class="fa-solid fa-heart"></i> Add to wishlist
          </button>
        </div>
      </div>
    </main>
    @endforeach
    <!-- search data display ended -->
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <title>Book Store</title>
</head>
  <!-- Navbar -->
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Book-store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link dropdown-toggle animated" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <form class="d-flex" action="/search" method="get">
          <input class="form-control me-2" type="text" placeholder="Search"  name="query">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>
<!-- Navbar Ended -->

<!-- Carousel Image slidebar -->
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top:3%">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner bg-secondary">
                  <div class="carousel-item active">
                    <img src="https://veronicalanebooks.com/wp-content/uploads/2021/01/kNb7RVMWiA-600x400.jpg" class="" alt="..." style="height:10%" width="40%">
                    <div class="text-center">
                    <i class="text-light">Children.s literature comprises those books written and published for young people who are not yet interested in adult literature or who may not possess the reading skills or developmental understandings necessary for its perusal.</i>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://veronicalanebooks.com/wp-content/uploads/2021/01/aDcSqAOHFx.jpg" class="" alt="..."  style="height:10%" width="40%">
                    <div class="text-center">
                    <i class="text-light">Cookbooks are a collection of recipes, instructions, and information about the preparation and serving of foods. A cookbook is also a chronicle and treasury of the fine art of cooking which would otherwise be lost. Cookbooks may be written by individual authors, who may be chefs, cooking teachers, or other food writers; they may be written by collectives, or they may be anonymous. They may be addressed to home cooks, professional restaurant cooks, institutional cooks, or more specialized audiences.</i>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://veronicalanebooks.com/wp-content/uploads/2021/01/NTSdzBIDpp.jpg" class="" alt="..."  style="height:10%" width="40%">
                    <div class="text-center">
                    <i class="text-light">Fiction implies the inventive construction of an imaginary world and, most commonly, its fictionality is publicly acknowledged. Hence, its audience typically expects it to deviate in some ways from the real world rather than presenting only characters who are actual people or portrayals that are factually true.</i>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://veronicalanebooks.com/wp-content/uploads/2023/05/America-Cover-1-202x300.jpg" class="" alt="..."  style="height:10%" width="20%">
                    <div class="text-center">
                    <i class="text-light">In this compelling and thoroughly researched historical study, author Nate Reztirob explores the United States’ rise as a global power since the 19th century, examining the costs and consequences of America’s overseas wars and interventions.</i>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section><br><br><br>
<!-- Image slider Ended -->

<!--  second section -->
<section id="book-section" style="">
<div class="card">
    <h5 class="card">Spirit Walk</h5>
    <div class="card-body">
      <img src="https://veronicalanebooks.com/wp-content/uploads/2019/02/Spirit-Walk-sq.jpg">
      <p class="card-text-walk">This book celebrates the life of medicine man Thomas One Wolf, who touched many lives with his ceremony and wisdom.</p>
      <a href="#" class="btn btn-outline-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card">
    <h5 class="card">Twilight of Gutenberg by Hitoshi Goto</h5>
    <div class="card-body">
      <img src="https://veronicalanebooks.com/wp-content/uploads/2015/05/twilight.jpg">
      <p class="card-text-walk">Twilight of Gutenberg is a fast-pasted mystery thriller with the action set mostly in Europe during WW2, against the background of a story spanning eight centuries up to the present day.</p>
      <a href="#" class="btn btn-outline-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card">
    <h5 class="card">Sake,Health and Longevity by Yukio Takazawa,MD</h5>
    <div class="card-body">
      <img src="https://veronicalanebooks.com/wp-content/uploads/2020/12/sake-148x222.jpg">
      <p class="card-text-walk">Sake, Health and Longevity by Yukio Takizawa, MD is an outstanding introduction to sake, the nutritional and national beverage of Japan.</p>
      <a href="detail" class="btn btn-outline-primary">Go somewhere</a>
    </div>
  </div>
</div>
</section>

<!-- End section -->

<!-- section thirf -->
<section>
  <div id="header">
    <h1> Visit Book</h1>
    <p>by Knowlwdge creativity | make strong mind& confidence</p>
      </div>
    <div class="container">
    <div class="card">
      <div class="card-image">
        <img src="https://m.media-amazon.com/images/I/81XqXdOE5mS._AC_UY327_FMwebp_QL65_.jpg">
      </div>
      <div class="card-text">
        <p class="card-meal-type">In the early 1920s Gandhi led several civil disobedience campaignss</p>
        <p class="card-body">An Autobiography : The Story Of My Experiments With Truth</p>
      </div>
      <div class="card-price">₹1091</div>
    </div>
      <div class="card">
      <div class="card-image">
        <img src="https://m.media-amazon.com/images/I/61s3uLKk4KL._AC_UY327_FMwebp_QL65_.jpg" height="1px">
      </div>
      <div class="card-text">
        <p class="card-meal-type">Psychopathology of Everyday Life</p>
        <p class="card-body">Psychopathology of Everyday Life is a seminal work by Sigmund Freud, the father of psychoanalysis</p>
      </div>
      <div class="card-price">₹2100</div>
    </div>
      <div class="card">
      <div class="card-image">
        <img src="https://m.media-amazon.com/images/I/71g2ednj0JL._AC_UY327_FMwebp_QL65_.jpg">
      </div>
      <div class="card-text">
        <p class="card-meal-type">The Psychology Of Money</p>
        <p class="card-body">Timeless lessons on wealth, greed, and happiness doing well with money isn?t necessarily about what you know. </p>
      </div>
      <div class="card-price">₹1109</div>
    </div>
    </div>

</section>

<!-- End third section -->

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

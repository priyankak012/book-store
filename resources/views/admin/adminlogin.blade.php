<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="{{asset('css/adminlogin.css')}}">
    </head>
<body>
    <div class="wrapper">
    <div class="container">
      <div class="col-left">
        <div class="login-text">
          <h2>Welcome Back</h2>
          <p>Create your account.<br>It's totally free.</p>
          <a class="btn" href="">Sign Up</a>
        </div>
      </div>
      <div class="col-right">
        <div class="login-form">
          <h2>Login</h2>
          <form action="{{route('adminLoginPost')}}" method="post">
            @csrf
            <p>
                 <label>Email id: </label>
                <input type="email" class="form-control" name="email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </p>
            <p>
              <label>Password</label>
              <input type="password" placeholder="Password" name="password">
              @error('password')
              <span class="text-danger">{{ $message }}</span>
          @enderror
            </p>
            <p>
              <button type="submit" name="submit">Click here </button>
            </p>
            <p>
              <a href="resetpassword">Forget Password?</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
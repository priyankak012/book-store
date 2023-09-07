<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/forgetpassword.css')}}">
   
</head>
<body>
              <div class="mainDiv mb-1">
                <div class="cardStyle">
                  <form action="{{route('forget.password.post')}}" method="post">
                    @csrf
                    
                    <img src="" id="signupLogo"/>
                       <h2 class="formTitle">
                    New password
                    </h2>

                    <div class="inputDiv">
                      <label class="inputLabel" for="email">User Email</label>
                      <input type="email" id="email" name="email" >
                      @error('email')
                        <span class="text-danger"></span>
                      @enderror
                    </div>
                    
                  <div class="inputDiv">
                    <label class="inputLabel" for="password">New Password</label>
                    <input type="password" id="password" name="password" >
                    @error('password')
                      <span class="text-danger"></span>
                    @enderror
                  </div>
                    
                  <div class="inputDiv">
                    <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword">
                    @error('password')
                      <span class="text-danger"></span>
                    @enderror
                  </div>
                  
                  <div class="buttonWrapper">
                    <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                      <span>Continue</span>
                      <span id="loader"></span>
                    </button>
                  </div>
                    
                </form>
                </div>
              </div>
</body>
</html>
@extends('layout.header')
@section('header')
        @if ($message = Session::get('success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong class="font-monospace text-center">{{ $message }}</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>        
        @endif

    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card card-signin flex-row my-5">
                        <div class="card-img-left d-none d-md-flex">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-label-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                     value="{{old('email')}}">
                                <label for="email">Email</label>
                                @error('email')
                                <span class="text-danger">{{ $message}}</span>
                                    
                                @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="">
                                    <label for="password">password</label>
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button  class="btn btn-dark"  type="submit" name="submit"> Login </button>
                                <p class="float-end"> if you doesn't have  registration !<i> <a href="registration"> click here </i> </a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    </html>
    @endsection                                
  
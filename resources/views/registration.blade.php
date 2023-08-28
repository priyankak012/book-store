@extends('layout.header')
@section('header')
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card card-signin flex-row my-5">
                        <div class="card-img-left d-none d-md-flex">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Register</h5>
                            <form action="{{ route('storedata') }}" method="post">
                                @csrf
                                <div class="form-label-group">
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror"
                                        value="{{ old('username') }}">
                                    <label for="username">Username</label>
                                    @error('username')
                                        <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="email" name="email"
                                        class="form-control  @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                    @error('email')
                                        <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="number" name="phone"
                                        class="form-control  @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}">
                                    <label for="phone">phone</label>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="password" name="password"
                                        class="form-control  @error('password') is-invalid @enderror" value="">
                                    <label for="password">Password</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="password_confirmation"
                                        class="form-control  @error('password') is-invalid @enderror">
                                    <label for="password">Confirm password</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="btn-submit">
                                    <button class="btn btn-dark" type="submit"> Registration </button>
                                </div>
                                <p class="float-end"> if account already login<a href="login">click here !</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

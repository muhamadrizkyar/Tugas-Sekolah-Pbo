@extends('layouts.appLogin')

@section('title') 

Login Admin 

@endsection

@section('main')
    <div class="row justify-content-center mt-5">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">WELCOME BACK !</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Your Email" name="email" :value="old('email')" required autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger mt-2">Email Atau Password Tidak Sesuai</div>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Your Password" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger mt-2">Password Tidak Sesuai</div>
                                            </span>
                                        @enderror

                                        </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                                name="remember">
                                            <label class="custom-control-label" for="customCheck">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Login') }}
                                    </button>
                                    <hr>
                                    <div class="text-center">
                                            <a href="/register" class="small">Create An Account!</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


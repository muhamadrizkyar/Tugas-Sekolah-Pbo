@extends('layouts.appLogin')

@section('title') 
Register 
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
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="/register">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" aria-describedby="name" placeholder="Your Name" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <div class="alert alert-danger mt-2">Harap Diisi Nama</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" aria-describedby="email" placeholder="Your Email" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <div class="alert alert-danger mt-2">Password harus 8 karakter</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <div class="alert alert-danger mt-2">Harap Diisi Password</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user @error('password_con') is-invalid @enderror" id="password-confirm" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                                        @error('password_con')
                                                <div class="alert alert-danger mt-2">Silahkan Cek Password</div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                                </button>
                            <hr>
                                <div class="text-center">
                                    <!-- @if (Route::has('login')) -->
                                        <a href="/login" class="small">Already Have An Account?</a>
                                    <!-- @endif -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

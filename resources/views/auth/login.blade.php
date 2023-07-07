<style>
    body {
        background-image: url(../img/background.png);
        background-size: cover;
        background-position: center;
    }

    .tulisan {
        position: absolute;
        top: 50px;
        left: 100px;
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .deskripsi {
        position: absolute;
        top: 100px;
        left:70px;
        right: 70px;
        font-size: 15px;
        text-align: center;
        line-height: 1;
        color: white;
    }

</style>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="../img/background.png" class="img-fluid" alt="..." width="700" height="500">
                    <div class="card-header text-center" style="background-color: #FFCAC8;">{{ __('Login') }}</div>
                    <div class="tulisan">
                        WELCOME TO WEBSITE PORTOFOLIO
                    </div>
                    <div class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit voluptatem doloremque dolor alias obcaecati
                        aspernatur molestiae ducimus, iste ad eveniet voluptatum!
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-4">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="forget">
                                        @if (Route::has('password.request'))
                                            <a class="btn_password btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <div class="login-card-footer mt-2  ">
                                        Don't have an account? <a href="auth.register">Create a free account.</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

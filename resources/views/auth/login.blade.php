{{-- @extends('layouts.app')

@section('content') --}}
@extends('pustaka.plog')

@section('dada')


{{-- nav Start --}}
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent mb-5">
    <div class="container">
          {{-- <h2>Sinau</h2> --}}
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto row">
                <!-- Authentication Links -->
                @guest
                <div class="col-md-6">
                    <li class="nav-item ">
                        <a class="nav-link btn" style="background: linear-gradient(-180deg,#6ea6ff,#3288f9 60%);" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                </div>
                    @if (Route::has('register'))
                    <div class="col-md-6">
                        <li class="nav-item">
                            <a class="nav-link btn" style="background: linear-gradient(-180deg,#6ea6ff,#3288f9 60%);" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    </div>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
 {{-- END nav --}}

{{-- start kontent --}}
 <div class="page-header clear-filter" filter-color="blue">
    <div class="page-header-image" style="background-image:url(loginui/assets/img/sinau1.jpg)"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" style="margin-top:150px;">
                    <div class="">
                        {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" style="background:#6c757d45;color:#FFFFFF" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" style="background:#6c757d45;color:#FFFFFF" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn d-block" style="background: linear-gradient(-180deg, #6ea6ff,#3288f9 60%);">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a> --}}
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </div>
{{-- and kontent --}}
@endsection

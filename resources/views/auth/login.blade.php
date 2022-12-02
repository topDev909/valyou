@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="{{ url('index') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages mt-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-12">
                                       <a href="{{url('/')}}"> <img src="{{asset('assets/images/valyou_x_black_logo.svg')}}" alt="" class="img-fluid logo-img"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="text-center mt-20">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to Valyou X.</p>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group spycust">
                                            <input name="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" placeholder="E-mail" id="email" autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group spycust">
                                            <input type="password" name="password"
                                                   class="form-control  @error('password') is-invalid @enderror"
                                                   id="userpassword" placeholder="Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember
                                                me</label>
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn-block waves-effect waves-light btn-right" type="submit"><img width="120" src="{{ asset('assets/images/login-btn.svg') }}" alt="">
                                            </button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign in with</h5>

                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                       class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="mt-4 text-center spycust">
                                            <a href="password/reset" class="text-muted"><i class="mdi mdi-lock mr-1"></i>
                                                Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="mt-5 text-center">
                            <p>Don't have an account ? <a href="{{ url('register') }}"
                                                          class="font-weight-medium text-primary"> Signup now </a></p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                Valyou X <i class="mdi mdi-heart text-danger"></i> Powered by Blockchain Technology
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

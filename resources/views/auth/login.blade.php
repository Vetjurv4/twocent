@extends('layouts.app')

@section('content')

@include('../templates/AppNav')

<section class="site-section" id="next-section">
    <div class="container">
        
        <div class="row align-items-center justify-content-center newNav">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>Login</h1>
                <div class="mx-auto w-75">
                    <p>the world is a better place when we speak out, listen, teach, share and build community using the little something we have.</p>
                </div>
            </div>
        </div>
 
        <div class="row justify-content-center">
            <div class=" col-lg-6 mb-5 mb-lg-0">
                <form method="POST" action="{{ route('login') }}" class="">
                    @csrf
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label> 
                            <input type="email" id="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="password">Password</label> 
                            <input type="password" id="subject" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                       <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Login" class="btn btn-primary btn-md text-white">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif |
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Dont have an account?') }}
                            </a>
                            @endif
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</section>


@endsection

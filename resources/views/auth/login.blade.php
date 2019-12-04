@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card">
              
                <div class="card-body">
                    <h3 class="ml-"> {{ __('Sign in') }} </h3>

                    <form method="POST"  action="{{ route('login') }}">
                        @csrf

                        <div class="form-group ml-n3 col-md-12">
                            <label for="email" >{{ __('Email address') }}</label>

                    
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder=" Enter Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group col-md-12 ml-n3">
                            <label for="password" class="">
                            {{ __('Password') }}
                            @if (Route::has('password.request'))
                                    <a class=" forget-link" style="position: relative; left: 15rem" href="{{ route('password.request') }}" >
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" style="width: 29.2rem" class="btn btn-lg btn-signin btn-block btn-primary">
                                    {{ __('Sign in') }}
                                </button>

                             
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
            
            <div class="d-flex justify-content-center mt-1">    
                <small> Don't have an account yet? <a href="{{ route('register') }}"> Create One </a> </small>
            </div>
        </div>
    </div>
</div>
@endsection

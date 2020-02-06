@extends('layouts.app')
@section('content')
    <div class="single-widget-container">
        <section class="widget login-widget">
            <header class="text-align-center">
                <h4>{{ __('Login to your account')}}</h4>
            </header>
            <div class="body">
                <form method="POST" action="{{ route('login') }}"  class="no-margin"action="index.html" method="get">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label for="email" >{{ __('Email')}}</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-lg input-transparent" 
                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" >{{ __('Password')}}</label>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-lg input-transparent" 
                                name="password" value="{{ old('password') }}" autocomplete="password" autofocus>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-flex">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                    </div>
                    </fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-block btn-lg btn-danger">
                            <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                            <small>{{ __('Sign In')}}</small>
                        </button>
                        @if (Route::has('password.request'))
                            <a class="forgot" href="{{ route('password.request')}}">{{ __('Forgot Username or Password?')}}</a>
                        @endif
                    </div>
                </form>
            </div>
            <footer>
                <div class="facebook-login">
                    <a href=" {{ route('register') }} "><span> {{ __('Don\'t have an account?')}}</span></a>
                </div>
            </footer>
        </section>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="single-widget-container" style="margin-top: -231.5px;">
    <section class="widget login-widget">
        <header class="text-align-center">
            <h4>{{ __('Register Form')}}</h4>
        </header>
        <div class="body">
            <form method="POST" action="{{ route('register') }}"  class="no-margin"action="index.html" method="get">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="email" >{{ __('Full Name')}}</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror input-lg input-transparent" 
                            name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                        </div>
                    </div>

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
                        <label for="password" >{{ __('Confirm Password')}}</label>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror input-lg input-transparent" 
                            name="password_confirmation" autocomplete="new-password">
                            
                        </div>
                    </div>

                </fieldset>
                <div class="form-actions">
                    <button type="submit" class="btn btn-block btn-lg btn-danger" style="margin-bottom: 17px;">
                        <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                        <small>{{ __('Sign Up')}}</small>
                    </button>
                    
                </div>
            </form>
        </div>
        <footer>
            <div class="facebook-login" style="margin-top: 10px;">
                <a href=" {{ route('login') }} "><span> {{ __('Already has an account?')}}</span></a>
            </div>
        </footer>
    </section>
</div>
@endsection

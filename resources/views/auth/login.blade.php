{{-- @extends('layouts.app') --}}
@extends('layouts.master')

@section('content')
<div class="maincontainer-register">
  <h1>Log in</h1>
  <div class="col-12 col-md-8 container-register">
    <form class="form" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="group2-register row>">
        <div class="form-group">
          <label for="email" >{{ __('Email') }}</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password" >{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
        </div>
      </div>
      <div class="group2-register row">
      <div class="form-group ">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">  {{ __('Remember Me') }}</label>
        </div>
      </div>
          </div>
          <button type="submit" class="btn btn-register">{{ __('Login') }}</button><br>
          @if (Route::has('password.request'))
          <a class="login-register" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
          @endif
    </form>
{{-- <form class="form " action="">
<div class="group2-register row">
<div class="form-group">
<label for="email">Email</label>
<input class="form-control "type="email" required name="email" value="" placeholder="">
</div>
<div class="form-group ">
<label for="password">password</label>
<input class="form-control "type="password" required name="password" value="" placeholder="">
</div>
</div>
<button class=" btn btn-register ">Login</button>
<div class="">
<a href="{{url('signup')}}" class="login-register"> <p>Don't have an account yet? Sign Up </p> </a>
<a href="{{url('chpswconf')}}" class="login-register"> <p>Forgotten your password?  </p> </a>
</div>
</form>
--}}
</div>
</div>
@endsection

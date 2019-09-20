@extends('layouts.master')
@section('content')

<div class="maincontainer-register">
    <h1>Log in</h1>
    <div class="col-12 col-md-8 container-register ">
        <form class="form " action="">
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
    </div>
</div>
@endsection






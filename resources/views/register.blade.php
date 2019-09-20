@extends('layouts.master')
@section('content')

<div class="maincontainer-register">
    <h1>Create an account</h1>
    <div class="col-12 col-md-8 container-register ">
        <form class="form " action="">
          <div class="group2-register row">
              <div class="form-group">
                <label for="firstName">First name</label>
                <input class="form-control "type="text" required name="firstName" value="" placeholder="">
            </div>
            <div class="form-group ">
                <label for="lastName">Last name</label>
                <input class="form-control "type="text" required name="lastName" value="" placeholder="">
            </div>
        </div>
        <div class="form-group ">
            <label for="email">Email</label>
            <input class="form-control "type="email" aria-describedby="emailHelp" required name="email" value="" placeholder="">
        </div>
        <div class="group2-register">
          <div class="form-group ">
            <label for="password">Password</label>
            <input class="form-control placeholder-register" type="password" required name="password" value="" placeholder= "8 caracters minimum">
        </div>
        <div class="form-group ">
            <label class="confirmpass-register" for="repeatPassword">Confirm password</label>
            <input class="form-control placeholder-register " type="password" required name="repeatPassword" value="" placeholder="8 caracters minimum">
        </div>
    </div>
    <button class=" btn btn-register ">Register</button>
    <a href="{{url('login')}}" class="login-register"> <p>Already have an account? Log in </p> </a>



</form>

</div>

</div>

@endsection

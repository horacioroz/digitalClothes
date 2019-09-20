@extends('layouts.master')
@section('content')

<div class="maincontainer-register">
    <h1>Forgotten your password?</h1>
    <div class="col-12 col-md-8 container-register ">
        <form class="form " action="">
            <h6>Confirm your email address to receive an email to reset your password.</h6>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control "type="email" required name="email" value="" placeholder="">
            </div>
            <button class=" btn btn-register ">Confirm</button>
        </form>
    </div>
</div>
@endsection

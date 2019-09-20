@extends('layouts.master')
@section('content')
<div class="maincontainer-register">
    <h1 class="">Reset your password</h1>
    <div class="col-12 col-md-8 container-register ">
        <form class="form " action="">
            <div class="group2-register row">
                <div class="form-group">
                    <label for="newPassword">New password</label>
                    <input class="form-control  placeholder-register"type="password" required name="NewPassword" value="" placeholder="8 caracters minimum">
                </div>
                <div class="form-group  ">
                    <label class="confirmpass-register" for="confirmPassword">Confirm password</label>
                    <input class="form-control placeholder-register "type="password" required name="confrimPassword" value="" placeholder="8 caracters minimum">
                </div>
            </div>
            <button class=" btn btn-register ">Reset password</button>
        </form>
    </div>
</div>

@endsection

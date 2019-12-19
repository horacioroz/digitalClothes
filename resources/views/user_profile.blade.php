
@extends('layouts.master')
@section('content')
<div class="maincontainer-register">
        <h1>Datos del usuario : </h1>
        <div class="col-12 col-md-8 container-register-edit ">
            <div class="form form-user-edit">
                <div class="form-group form-group-edit">
                    <p class="title">Nombre:</p>
                    <p class="data">{{Auth::user()->firstName}}</p>
                </div>
                <div class="form-group form-group-edit">
                    <p class="title">Apellido:</p>
                    <p class="data">{{Auth::user()->lastName}}</p>
                </div>
                <div class="form-group form-group-edit">
                    <p class="title">Mail:</p>
                    <p class="data">{{Auth::user()->email}}</p>
                </div>
                <div class="form-group form-group-edit">
                    <p class="title">Telefono:</p>
                    <p class="data">{{Auth::user()->phone}}</p>
                </div>
                <div class="form-group form-group-edit">
                    <p class="title">Direccion :</p>
                    <p class="data">{{Auth::user()->address}}</p>
                </div>
                <div class="form-group form-group-edit">
                    <p class="title">Ciudad</p>
                    <p class="data">{{Auth::user()->city}}</p>
                </div>
                <div class="form-group form-group-edit">
                    <p class="title">Codigo postal:</p>
                    <p class="data">{{Auth::user()->postal}}</p>
                </div>
             <div class="form-group form-group-edit">
                 <div class="user_profile_avatar">
                    <img src="{{url('storage/images/users', $user->avatar)}}" alt="imagen avatar">
                </div>
        </div>
        </div>
     </div>
            <div class="user_profile_botton">
                    <article class=" btn btn-register">
                        <a href="{{ route('profile_edit', $user) }}">Editar</a>
                   </article>
             </div>
    </div>
 @endsection

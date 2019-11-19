@extends('layouts.master')
@section('content')


<div class="maincontainer-register">
    <h1>Editando Mis Datos</h1>
    <div class="col-12 col-md-8 container-register-edit ">
        <form class="form " method="POST" enctype="multipart/form-data" action='{{ "route('profile_update'),$user->id" }}' novalidate >{{-- saque del action singup --}}
            {{method_field('PUT')}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <label for="firstName">Nombre</label>
                    <input class="form-control "type="text" required name="firstName" value="{{ $user->firstName }} " placeholder="">
                    {!! $errors->first('firstName','<span  class=error>:message</span>') !!}
                </div>
                <div class="form-group-edit ">
                    <label for="lastName">Apellido</label>
                    <input class="form-control "type="text" required name="lastName" value="{{ $user->lastName }}" placeholder="">
                    {!! $errors->first('lastName','<span  class=error>:message</span>') !!}
                </div>

            <div class="form-group-edit ">
                <label for="email">Email</label>
                <input class="form-control "type="email" aria-describedby="emailHelp" required name="email" value="{{$user->email }}" placeholder="">
                {!! $errors->first('email','<span  class=error>:message</span>') !!}
            </div>

            <div class="form-group-edit ">
                <label for="phone">Teléfono</label>
                <input  class="form-control placeholder-register" type="tel" name="phone" value="{{ $user->phone }}" placeholder= ""  pattern="[+0-9]{3}-[0-9]{3}-[0-9]{4}-[0-9]{4}">
               {{-- {!! $errors->first('password','<span  class=error>:message</span>') !!} --}}
               {{-- En el placeholder número de teléfono válido sin guiones ej: 01159808983 y en error si no es numérico --}}
            </div>
            <div class="form-group-edit ">
                <label  for="address">Dirección</label>
                <input  class="form-control placeholder-register " type="text" name="address" value="{{ $user->address }}" placeholder="">
                {{-- {!! $errors->first('password_confirmation','<span  class=error>:message</span>') !!} --}}
            </div>
            <div class="form-group-edit ">
                <label for="city">Ciudad</label>
                <input  class="form-control placeholder-register" type="text" name="city" value="{{ $user->city }}" placeholder= "">
               {{-- {!! $errors->first('password','<span  class=error>:message</span>') !!} --}}
               {{-- Debiéramos hacer un option y agregar a la DB provincia --}}
            </div>
            <div class="form-group-edit ">
                <label for="postal">Código Postal</label>
                <input  class="form-control placeholder-register" type="text" name="postal" value="{{ $user->postal }}" placeholder= "">
               {{-- {!! $errors->first('password','<span  class=error>:message</span>') !!} --}}
               {{-- Debe haber una api de códigos postales después de saber provincia y ciudad --}}
            </div>
            <div class="form-group-edit ">
                <label for="avatar">Avatar</label>
                {{-- <input type="file"> --}}
                <input  class="form-control placeholder-register" type="file" name="avatar" value="{{'storage/', $user->avatar}}" placeholder="{{'storage/', $user->avatar}}">
            </div>
               {{-- {!! $errors->first('password','<span  class=error>:message</span>') !!} --}}
               {{-- Debe haber una api de códigos postales después de saber provincia y ciudad --}}
            <div class="form-group-edit ">
                <div class="user_profile_avatar">
                <img src="{{url('storage/images/users', $user->avatar)}}" alt="imagen avatar">
                </div>
            </div>
        </div>

            <button class=" btn btn-register " type="submit" >Guardar</button>

        </form>
    </div>
</div>
@endsection

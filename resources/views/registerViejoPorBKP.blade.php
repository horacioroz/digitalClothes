@extends('layouts.master')
@section('content')

<?php
    $nombre = "";
    $nombre2 = "";
    $email = "";

//Explicación: Laravel se maneja con controladores que es donde están las funciones.
//las funciones se llaman directamente y buscan en el archivo de rutas en que controlador se encuentran y por que método viajan (get, post ó any que es cualquiera de los dos).
//En el archivo web.php que está en eldirectorio Routes se encuentran las rutas.
//Dos rutas aunque pueden tener el mismo nombre si viajan por canales distintos (get y post)
//Para entenderlo mejor, el archivo web.php es como el índice de un libro (en éste caso del sitio), cuando llamamos algo, va ahí, busca y lo primero que coincide encontrado te lo trae.
//Las rutas de las funciones de los controladores se escriben
//Route::método(get o post)(‘xxxview’, ‘XxxviewController@nombreDeLaFunciónALaQueRefiere’)
       // }
?>

<div class="maincontainer-register">
    <h1>Create an account</h1>
    <div class="col-12 col-md-8 container-register ">
        <form class="form " action="signup" novalidate method="POST">
            {!!csrf_field()!!}
            <div class="group2-register row">
                <div class="form-group">
                    <label for="firstName">Nombre</label>
                    <input class="form-control "type="text" required name="firstName" value="{{ old('firstName') }} " placeholder="">
                    {!! $errors->first('firstName','<span  class=error>:message</span>') !!}
                    <!--{{-- <?php if(isset($errores['firstName'])):?> --}}
                        {{-- <h6 class="text-danger"><?= $errores['firstName'];?></h6> --}}
                        {{-- <?php endif;?> --}}-->
                </div>
                <div class="form-group ">
                    <label for="lastName">Apellido</label>
                    <input class="form-control "type="text" required name="email" value="{{ old('lastName') }}" placeholder="">
                    {!! $errors->first('lastName','<span  class=error>:message</span>') !!}
                    <!--{{-- <?php if(isset($errores['lastName'])):?> --}}
                        {{-- <h6 class="text-danger"><?= $errores['lastName'];?></h6> --}}
                        {{-- <?php endif;?> --}}-->
                </div>
            </div>
            <div class="form-group ">
                <label for="email">Email</label>
                <input class="form-control "type="email" aria-describedby="emailHelp" required name="email" value="{{ old('email') }}" placeholder="">
                {!! $errors->first('email','<span  class=error>:message</span>') !!}
                <!--{{-- <?php if(isset($errores['email'])):?> --}}
                    {{-- <h6 class="text-danger"><?= $errores['email'];?></h6> --}}
                    {{-- <?php endif;?> --}}-->
            </div>
        </div>
        <div class="group2-register">
            <div class="form-group ">
                <label for="password">Contraseña</label>
                <input  class="form-control placeholder-register" type="password"  required name="password" value="" placeholder= "8 caracters minimun">
                {!! $errors->first('password','<span  class=error>:message</span>') !!}
                <!--{{-- <?php if(isset($errores['password'])):?>
                    <h6 class="text-danger"><?= $errores['password'];?></h6>
                    <?php endif;?> --}}-->
            </div>
            <div class="form-group ">
                <label class="confirmpass-register" for="password_confirmation">Repetir contraseña</label>
                <input  class="form-control placeholder-register " type="password" required name="password_confirmation" value="" placeholder="8 caracters minimun">
                {!! $errors->first('password_confirmation','<span  class=error>:message</span>') !!}
                <!--{{-- <?php if(isset($errores['repeatPassword'])):?>
                    <h6 class="text-danger"><?= $errores['repeatPassword'];?></h6>
                    <?php endif;?> --}}-->
            </div>
        </div>
            <button class=" btn btn-register " type="submit" > Register</button>
            <a href="{{url('login')}}" class="login-register"> <p>Already have an account? Log in </p> </a>
        </form>
    </div>
</div>


@endsection

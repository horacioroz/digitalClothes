
@extends('layouts.master')
@section('content')
        <h1>Datos del usuario : </h1>
    <div class="user_profile_container">

        <section class="user_profile">

            <div class="user_profile_gr">
                <article class="user_profile_form_datos">
                    <p class="nombre">Nombre:</p>
                    <p class="apellido">Apellido:</p>
                    <p class="mail">Mail:</p>
                    <p class="telefono">Telefono:</p>
                    <p class="direccion">Direccion :</p>
                    <p class="ciudad">Ciudad</p>
                    <p class="codigopostal">Codigo postal:</p>
                </article>
                <article class="user_profile_datos">

                    <p class="nombre">{{Auth::user()->firstName}}</p>
                    <p class="apellido">{{Auth::user()->lastName}}</p>
                    <p class="mail">{{Auth::user()->email}}</p>
                    <p class="telefono">{{Auth::user()->phone}}</p>
                    <p class="direccion">{{Auth::user()->address}}</p>
                    <p class="ciudad">{{Auth::user()->city}}</p>
                    <p class="codigopostal">{{Auth::user()->postal}}</p>

                </article>
            </div>
            <div class="user_profile_botton">
                   <article class="user_profile_btn_editar">
                   <p>Editar</p>
                   </article>
                   <article class="user_profile_btn_salvar">
                   <p>Salvar</p>
                   </article>
             </div>
             <div class="user_profile_avatar">
                <img src="images/profile.jpg" alt="imagen avatar">{{-- {{Auth::user()->storage/avatar}} --}}
            </div>


        </section>
    </div>
 @endsection

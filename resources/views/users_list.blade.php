
@extends('layouts.master')
@section('content')

<h1>{{ $title }}</h1>
    <ul>
        @forelse($users as $user)
        <li>{{$user}}</li>
        {{-- <li>{{ $user->id}}{{ $user->firstName}},{{$user->lastName}}, {{$user->email}}</li> --}}
        @empty
        <li>No hay usuarios registrados.</li>
        @endforelse

    </ul>
{{--         <h1>Datos del usuario</h1>
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
                    <p class="nombre">pablo</p>
                    <p class="apellido">fernando</p>
                    <p class="mail">pablofernando@gmail.com</p>
                    <p class="telefono">Telefono:</p>
                    <p class="direccion">Direccion :</p>
                    <p class="ciudad">Buenos aires</p>
                    <p class="codigopostal">1682</p>

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
                <img src="{{ asset('images/profile.jpg')}}" alt="imagen avatar">
            </div>


        </section>
    </div>
 --}} @endsection

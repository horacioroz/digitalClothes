@extends('layouts.admin')
@section('content')

<h3>Recibió un mensaje de  {{$firstName}}  {{$lastName}}</h3>
<p>Nombre : {{$firstName}}</p>
<p>Apellido: {{$lastName}}</p>
<p>Email: {{$email}}</p>
<p>Teléfono: {{$phone}}</p>
<p>Mensaje: {{$message}}</p>



@include('banner')
@endsection


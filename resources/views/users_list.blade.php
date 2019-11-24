
@extends('layouts.admin')
@section('content')

<h1>{{ $title }}</h1>
<div class="user_list_titles">
    <p class="id">Id</p>
    <p>Nombre</p>
    <p>Apellido</p>
    <p>Mail</p>
</div>
    <ul>
        @forelse($users as $user)
        {{-- <li>{{$user}}</li> --}}
        <li class="user_list_row">
            <p class="user_list_item id">{{ $user->id}}</p>
            <p class="user_list_item">{{ $user->firstName}}</p>
            <p class="user_list_item">{{$user->lastName}}</p>
            <p class="user_list_item">{{$user->email}}</p>
        </li>
        <hr>
        @empty
        <li>No hay usuarios registrados.</li>
        @endforelse

    </ul>
@endsection

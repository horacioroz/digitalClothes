
@extends('layouts.admin')
@section('content')
<h1>{{ $title }}</h1>
<div class="user_list_titles">
    <p class="id">Id</p>
    <p >Talle</p>
    <p>Editar</p>
    <p>Activar</p>
    <p>Eliminar</p>
</div>
    <ul>
        {{-- $flight = App\Flight::where('active', 1)->first(); Podría ser la respuesta para mostrar solo los activos--}}
        @forelse($sizes as $value)
        @if($value->active == 1)
        <li class="size_list_row">

            <p class="size_list_item id">{{$value->id}}</p>
            <p class="size_list_item">{{$value->size_name}}</p>
            <a href="{{ url('size_edit',$value->id) }}" class="size_list_item"><i class="fas fa-edit"></i></a>
            <a href="{{ url('size_active',$value->id) }}" class="size_list_item"><i class="fas fa-trash-restore-alt"></i></a>
            <a href="{{url('size_destroy',$value->id)}}" class="size_list_item"><i class="fas fa-trash-alt"></i></a>
        </li>
        <hr>
        @else
        <li class="size_list_row">
            <p class="size_list_item_not_active id">{{$value->id}}</p>
            <p class="size_list_item_not_active">{{$value->size_name}}</p>
            <a href="{{ url('size_edit',$value->id) }}" class="size_list_item"><i class="fas fa-edit"></i></a>
            <a href="{{ url('size_active',$value->id) }}" class="size_list_item"><i class="fas fa-trash-restore-alt"></i></a>
            <a href="{{url('size_destroy',$value->id)}}" class="size_list_item"><i class="fas fa-trash-alt"></i></a>
        </li>
        <hr>
        @endif
        @empty
        <li class="size_list_row"><p class="size_list_item">No hay talles registrados.</p></li>
        @endforelse

    </ul>
  <div class="size-search-group">
    <form action="/size_search" method="GET" class="size-search-form">
        <input type="text" class="size-search-box" name="busqueda">
        <input type="submit" class="size-search"    value="Buscar">
        <a href="{{url('size_create')}}" class="size_add"><i class="fas fa-upload">    Agregar Talle</i></a>
    </form>
    </div>
@endsection

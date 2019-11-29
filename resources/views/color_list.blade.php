
@extends('layouts.admin')
@section('content')
<h1>{{ $title }}</h1>
<div class="user_list_titles">
    <p class="id">Id</p>
    <p >Color</p>
    <p>Editar</p>
    <p>Activar</p>
    <p>Eliminar</p>
</div>
    <ul>
        {{-- $flight = App\Flight::where('active', 1)->first(); Podría ser la respuesta para mostrar solo los activos--}}
        @forelse($colors as $value)
        @if($value->active == 1)
        <li class="color_list_row">

            <p class="color_list_item id">{{$value->id}}</p>
            <p class="color_list_item">{{$value->color_name}}</p>
            <a href="{{ url('color_edit',$value->id) }}" class="color_list_item"><i class="fas fa-edit"></i></a>
            <a href="{{ url('color_active',$value->id) }}" class="color_list_item"><i class="fas fa-trash-restore-alt"></i></a>
            <a href="{{url('color_destroy',$value->id)}}" class="color_list_item"><i class="fas fa-trash-alt"></i></a>
        </li>
        <hr>
        @else
        <li class="color_list_row">
            <p class="color_list_item_not_active id">{{$value->id}}</p>
            <p class="color_list_item_not_active">{{$value->color_name}}</p>
            <a href="{{ url('color_edit',$value->id) }}" class="color_list_item"><i class="fas fa-edit"></i></a>
            <a href="{{ url('color_active',$value->id) }}" class="color_list_item"><i class="fas fa-trash-restore-alt"></i></a>
            <a href="{{url('color_destroy',$value->id)}}" class="color_list_item"><i class="fas fa-trash-alt"></i></a>
        </li>
        <hr>
        @endif
        @empty
        <li>No hay categorías registradas.</li>
        @endforelse

    </ul>
  <div class="color-search-group">
    <form action="/color_search" method="GET" class="color-search-form">
        <input type="text" class="color-search-box" name="busqueda">
        <input type="submit" class="color-search"    value="Buscar">
        <a href="{{url('color_create')}}" class="color_add"><i class="fas fa-upload">    Agregar Color</i></a>
    </form>
    </div>
@endsection

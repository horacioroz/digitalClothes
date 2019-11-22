
@extends('layouts.master')
@section('content')
<h1>{{ $title }}</h1>
<div class="user_list_titles">
    <p class="id">Id</p>
    <p >Categoría</p>
    <p>Editar</p>
    <p>Activar</p>
    <p>Eliminar</p>
</div>
    <ul>
        {{-- $flight = App\Flight::where('active', 1)->first(); Podría ser la respuesta para mostrar solo los activos--}}
        @forelse($categories as $value)
        @if($value->active == 1)
        <li class="category_list_row">

            <p class="category_list_item id">{{$value->id}}</p>
            <p class="category_list_item">{{$value->category_name}}</p>
            <a href="{{ url('category_edit',$value->id) }}" class="category_list_item"><i class="fas fa-edit"></i></a>
            <a href="{{ url('category_active',$value->id) }}" class="category_list_item"><i class="fas fa-trash-restore-alt"></i></a>
            <a href="{{url('category_destroy',$value->id)}}" class="category_list_item"><i class="fas fa-trash-alt"></i></a>
        </li>
        <hr>
        @else
        <li class="category_list_row">
            <p class="category_list_item_not_active id">{{$value->id}}</p>
            <p class="category_list_item_not_active">{{$value->category_name}}</p>
            <a href="{{ url('category_edit',$value->id) }}" class="category_list_item"><i class="fas fa-edit"></i></a>
            <a href="{{ url('category_active',$value->id) }}" class="category_list_item"><i class="fas fa-trash-restore-alt"></i></a>
            <a href="{{url('category_destroy',$value->id)}}" class="category_list_item"><i class="fas fa-trash-alt"></i></a>
        </li>
        <hr>
        @endif
        @empty
        <li>No hay categorías registradas.</li>
        @endforelse

    </ul>
  <div class="category-search-group">
    <form action="/category_search" method="GET" class="category-search-form">
        <input type="text" class="category-search-box" name="busqueda">
        <input type="submit" class="category-search"    value="Buscar">
        <a href="{{url('category_create')}}" class="category_add"><i class="fas fa-upload">    Agregar Categoría</i></a>
    </form>
    </div>
@endsection

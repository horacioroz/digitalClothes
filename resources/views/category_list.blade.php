
@extends('layouts.master')
@section('content')
<h1>{{ $title }}</h1>
<div class="user_list_titles">
    <p>Id</p>
    <p>Categoría</p>
    <p>Editar</p>
    <p>Eliminar</p>
</div>
    <ul>
        @forelse($categories as $value)
        {{-- <li>{{$user}}</li> --}}
        <li class="user_list_row">
            <p class="user_list_item">{{$value->id}}</p>
            <p class="user_list_item">{{$value->category_name}}</p>
            <a href="{{ url('category_edit',$value->id) }}" class="category_list_item"><i class="fas fa-edit"></i></a>
            <a href="/eliminarPelicula/{$value->id}" class="category_list_item"><i class="fas fa-trash-alt"></i></a>
        </li>
        @empty
        <li>No hay categorías registradas.</li>
        @endforelse

    </ul>
  <div class="category-search-group">
    <form action="/category_search" method="GET" class="category-search-form">
        <input type="text" class="category-search-box" name="busqueda">
        <input type="submit" class="category-search"    value="Buscar">
        <a href="/add_category" class="category_add"><i class="fas fa-upload">    Agregar Categoría</i></a>
    </form>
    </div>
@endsection
{{--  <a href="/detallePelicula/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td> <i class="fas fa-eye"></i>
                <td><a href="/editarPelicula/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td>
                <td>
                </tr>
 --}}

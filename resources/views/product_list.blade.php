@extends('layouts.admin')
@section('content')

<h1>{{ $title }}</h1>
<div class="user_list_titles">
    <p>Id</p>
    <p>Nombre</p>
    <p>Descripción</p>
    <p>Categoría</p>
    <p>Colores</p>
    <p>Talles</p>
    <p>Precio</p>
    <p>Descuento</p>
    <p>Editar</p>
    <p>Activar</p>
    <p>Eliminar</p>
</div>
<ul>
    @forelse($products as $product)
    {{-- @dd($product->colors); --}}
    @if($product->active == 1)

        {{-- $color = $product->colors()->get(); --}}


    <li class="category_list_row">
        <p class="user_list_item">{{ $product->id}}</p>
        <p class="user_list_item">{{ $product->name}}</p>
        <p class="user_list_item">{{$product->description}}</p>
        <p class="user_list_item">{{$product->category["category_name"]}}</p>
        <div class="color_list">
            @foreach($product->colors as $color)
                <p class="user_list_item ">{{$color->color_name}}</p>
            @endforeach
        </div>
        <p class="user_list_item">{{$product->size}}</p>
        <p class="user_list_item price">{{$product->price}}</p>
        <p class="user_list_item">{{$product->discount_porcet}}</p>
        <a href="{{ url('product_edit',$product->id) }}" class="category_list_item"><i class="fas fa-edit"></i></a>
        <a href="{{ url('product_active',$product->id) }}" class="category_list_item"><i class="fas fa-trash-restore-alt"></i></a>
        <a href="{{url('product_destroy',$product->id)}}" class="category_list_item"><i class="fas fa-trash-alt"></i></a>
    </li>
    <hr>
    @else
    <li class="category_list_row">
        <p class="category_list_item_not_active ">{{ $product->id}}</p>
        <p class="category_list_item_not_active">{{ $product->name}}</p>
        <p class="category_list_item_not_active">{{$product->description}}</p>
        <p class="category_list_item_not_active">{{$product->category["category_name"]}}</p>
        <div class="color_list">
            @foreach($product->colors as $color)
                <p class="category_list_item_not_active color_list">{{$color->color["color_name"]}}</p>
            @endforeach
        </div>
        <p class="category_list_item_not_active">{{$product->size}}</p>
        <p class="category_list_item_not_active price">{{$product->price}}</p>
        <p class="category_list_item_not_active">{{$product->discount_porcet}}</p>
        <a href="{{ url('product_edit',$product->id) }}" class="category_list_item"><i class="fas fa-edit"></i></a>
        <a href="{{ url('product_active',$product->id) }}" class="category_list_item"><i class="fas fa-trash-restore-alt"></i></a>
        <a href="{{url('product_destroy',$product->id)}}" class="category_list_item"><i class="fas fa-trash-alt"></i></a>
    </li>
    <hr>
    @endif
    @empty
    <li>No hay categorías registradas.</li>
    @endforelse

</ul>
<div class="category-search-group">
    <form action="/product_search" method="GET" class="category-search-form">
        <input type="text" class="category-search-box" name="busqueda">
        <input type="submit" class="category-search"    value="Buscar">
        <a href="{{url('product_create')}}" class="category_add"><i class="fas fa-upload">    Agregar Categoría</i></a>
    </form>
</div>
@endsection

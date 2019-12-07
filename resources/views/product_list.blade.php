@extends('layouts.admin')
@section('content')

<h1>{{ $title }}</h1>
<div class="product_list_titles">
    <p class="id">Id</p>
    <p>Nombre</p>
    <p>Descripción</p>
    <p>Categoría</p>
    <p>Colores</p>
    <p>Talles</p>
    <p>Precio</p>
    <p>Descuento</p>
    <p class="eae">Editar</p>
    <p class="eae">Activar</p>
    <p class="eae">Eliminar</p>
</div>
<ul>
    @forelse($products as $product)
    @if($product->active == 1)
    <li class="product_list_row">
        <p class="product_list_item id">{{ $product->id}}</p>
        <p class="product_list_item">{{ $product->name}}</p>
        <p class="product_list_item">{{$product->description}}</p>
        <p class="product_list_item">{{$product->category["category_name"]}}</p>
        <div class="color_list">
            @foreach($product->colors as $color)
                <p class="product_list_item ">{{$color->color_name}}</p>
            @endforeach
        </div>
        <div class="size_list">
            @foreach($product->sizes as $size)
                <p class="product_list_item size_list">{{$size->size_name}}</p>
            @endforeach
        </div>
        {{-- <p class="product_list_item">{{$product->size}}</p> --}}
        <p class="product_list_item price">$  {{number_format( $product->price, 2, ",", "." ) }}</p>
        <p class="product_list_item">{{number_format( $product->discount_porcent, 2, ",", "." ) }}%</p>
        <a href="{{ url('product_edit',$product->id) }}" class="product_list_item"><i class="fas fa-edit"></i></a>
        <a href="{{ url('product_active',$product->id) }}" class="product_list_item"><i class="fas fa-trash-restore-alt"></i></a>
        <a href="{{url('product_destroy',$product->id)}}" class="product_list_item"><i class="fas fa-trash-alt"></i></a>
    </li>
    <hr>
    @else
    <li class="product_list_row">
        <p class="product_list_item_not_active id">{{ $product->id}}</p>
        <p class="product_list_item_not_active">{{ $product->name}}</p>
        <p class="product_list_item_not_active">{{$product->description}}</p>
        <p class="product_list_item_not_active">{{$product->category["category_name"]}}</p>
        <div class="color_list">
            @foreach($product->colors as $color)
                <p class="product_list_item_not_active color_list">{{$color->color_name}}</p>
            @endforeach
        </div>
        <div class="size_list">
            @foreach($product->sizes as $size)
                <p class="product_list_item_not_active size_list">{{$size->size_name}}</p>
            @endforeach
        </div>
        <p class="product_list_item_not_active price">$  {{number_format( $product->price, 2, ",", "." ) }}</p>
        <p class="product_list_item_not_active">{{number_format( $product->discount_porcent, 2, ",", "." ) }}%</p>
        <a href="{{ url('product_edit',$product->id) }}" class="product_list_item eae"><i class="fas fa-edit"></i></a>
        <a href="{{ url('product_active',$product->id) }}" class="product_list_item eae"><i class="fas fa-trash-restore-alt"></i></a>
        <a href="{{url('product_destroy',$product->id)}}" class="product_list_item eae"><i class="fas fa-trash-alt"></i></a>
    </li>
    <hr>
    @endif
    @empty
    <li class="product_list_row"><p class="product_list_item">No hay productos registrados.</p></li>
    @endforelse

</ul>
<div class="category-search-group">
    <form action="/product_search" method="GET" class="category-search-form">
        <input type="text" class="category-search-box" name="busqueda">
        <input type="submit" class="category-search"    value="Buscar">
        <a href="{{url('product_create')}}" class="category_add"><i class="fas fa-upload">    Agregar Producto</i></a>
    </form>
</div>
@endsection

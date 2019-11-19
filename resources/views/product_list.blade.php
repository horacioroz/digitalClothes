@extends('layouts.master')
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
</div>
    <ul>
        @forelse($products as $product)
        {{-- <li>{{$product}}</li> --}}
        <li class="user_list_row">
            <p class="user_list_item">{{ $product->id}}</p>
            <p class="user_list_item">{{ $product->name}}</p>
            <p class="user_list_item">{{$product->description}}</p>
            <p class="user_list_item">{{$product->category}}</p>
            <p class="user_list_item">{{$product->color}}</p>
            <p class="user_list_item">{{$product->size}}</p>
            <p class="user_list_item">{{$product->price}}</p>
            <p class="user_list_item">{{$product->discount_porcet}}</p>
        </li>
        @empty
        <li>No hay productos registrados.</li>
        @endforelse

    </ul>

{{-- 'name', 'description', 'category', 'prod_img', 'color', 'size', 'price', 'discount_porcet','active' --}}
@endsection

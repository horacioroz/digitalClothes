@extends('layouts.master')
@section('content')
<div class="main-container">
<div class="art_list">
    <ul>
    @forelse($products as $product)
    @if($product->active == 1)
    <li class="art_list_item">
        <div class="art_list_item_id-name">
        <p class="product_list_item id">{{ $product->id}}</p>
        <p class="product_list_item">{{ $product->name}}</p>
        </div>
        <div class="art_list_item_desc-cat">
        <p class="product_list_item">{{$product->description}}</p>
        <p class="product_list_item">{{$product->category["category_name"]}}</p>
        </div>
        <div class="art_color_list art_item_prop_title">Colores:
            @foreach($product->colors as $color)
                <p class="product_list_item ">{{$color->color_name}}</p>
            @endforeach
        </div>
        <div class="art_size_list">
            @foreach($product->sizes as $size)
                <p class="art_list_item size_list">{{$size->size_name}}</p>
            @endforeach
        </div>
        <div class="art_price">
           <p class="product_list_item price">$  {{number_format( $product->price, 2, ",", "." ) }}</p>
        <p class=" product_list_item">{{number_format( $product->discount_porcent, 2, ",", "." ) }}%</p>
        </div>
        <div class="art_cart_btn">
        <a href="{{ route ('product.addToCart',['id' => $product->id]) }}" class="btn btn-success pull-rith " role="button"><i class="fas fa-shopping-cart">Comprar</i></a>
        </div>
    </li>

    @endif
    @empty
    <li class="product_list_row"><p class="product_list_item">No hay productos registrados.</p>
    </li>
    @endforelse
</ul>
</div>

</div>



</div>

@endsection

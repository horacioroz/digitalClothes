@extends('layouts.master')
@section('content')

<div class="container">
    <div class="breadcrumbmain-art-view">
        <nav aria-label="breadcrumb row ">
            <ol class="breadcrumb-art-view">
                <li class="breadcrumb-item"><a href="#">Hombre</a></li>
                <li class="breadcrumb-item"><a href="#">Remeras</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="product_container_art_view ">
        <div class="column_art_view">
            @forelse($images as $image)
            @if($image->product_id==$product->id && $image->active==1)
            <div class="column_art_img">
                <a href="" class="column_art_view_a"><img src="{{url('storage/images/products', $image->image_name)}}" alt="imagen producto"></a>
            </div>
            @endif
            @empty
             <p>No hay fotos seleccionadas.</p>
            @endforelse
        </div>
    <div class="bigproduct-art-view">
        <div class="productimage-art-view">
            <img src="images/remera1.jpg" alt="">
        </div>
    </div>
    <div class="producttext-art-view">
        <h1>{{$product->name}}</h1>
        <div class="art_amounts">
        <h2 id="price">$  {{number_format( $product->price, 2, ",", "." ) }}</h2>{{-- si hay problemas al cargar el carrito con el precio hay que sacarle el formato --}}
        <h2 style = "color:red">Off  {{number_format( $product->discount_porcent, 2, ",", "." ) }}%</h2>
        </div>
        <p class="div-art-view">Descripcion</p>
        <p>{{$product->description}}</p>
        <form class="" action="{{route ('product.addToCart',['id'=> $product->id])}}" method="post">
            @csrf
             <div class="form-group-edit form-group ">
                    <label for="color">Color</label>
                    {!!Form::select('color.color_id', $colors->pluck('color_name'), array('class'=>'product_category_id_ul selectpicker form-control color_selected', 'name' => 'colors'))!!}
                    {{-- @dd($colors->pluck('color_id')); --}}
                                    </div>
            <div class="form-group-edit  form-group ">
                    <label for="size">Talles</label>
                    {!!Form::select('size.size_id', $sizes->pluck('size_name'), array('class'=>'product_category_id_ul selectpicker form-control size_select', 'name' => 'sizes'))!!}
                    {!! $errors->first('size','<span  class=error>:message</span>') !!}
                </div>
            <br>
            <div class="art_cart_btn">
                <button type="submit" class="btn btn-register   pull-rith " role="button"><i class="fas fa-shopping-cart">Comprar</i></button>
            </div>
        </form>
    </div>
    </div>
</div>
<script>
    {{-- Es una finción para darle formato de $ a los importes pero que no la estoy pudiendo hacer funcionar --}}
    // $('document').ready function (){
    //     var amount = getElementById('#price');
    // function CurrencyFormatted(amount) {
    // var i = parseFloat(amount);
    // if(isNaN(i)) { i = 0.00; }
    // var minus = '';
    // if(i < 0) { minus = '-'; }
    // i = Math.abs(i);
    // i = parseInt((i + .005) * 100);
    // i = i / 100;
    // s = new String(i);
    // if(s.indexOf('.') < 0) { s += '.00'; }
    // if(s.indexOf('.') == (s.length - 2)) { s += '0'; }
    // s = minus + s;
    // return s;
}
}
</script>
@endsection

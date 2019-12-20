@extends('layouts.master')
@section('content')

<div class="container-fuid main-container">
    <div class="art_list col-12 row p-1">
        @forelse($products as $product)
        <div class="art_list_part2 col-3">

            <div class="row jm_lista_vista ">
        <article   class="">
            <div id="carouselExampleIndicators" class="carousel slide jm_lista_vista_slider " data-touch="true" data-interval="0">
                <ol class="carousel-indicators " >
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">


             @forelse($product->images as $image)
                    {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> --}}
                    @if($image->product_id==$product->id && $image->active==1)
                    {{-- @dd($image->product_id); --}}
                    <div class="art_list_photo carousel-item active"><img src="{{url('storage/images/products', $image->image_name)}}" alt="imagen producto">
                    </div>
                    @endif
                    @empty
                    <p>No hay fotos seleccionadas.</p>
                    @endforelse
              </div>
              <a class="carousel-control-prev  " href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

                </div>
            {{-- <div class="art_list_photo ">
                <img src="/images/foto_3.jpg" alt="foto articulo">
            </div>  Muestra imagen de prueba única--}}
                @if($product->active == 1)
                <div class="art_list_item ">
                    <div>{{ $product->id}}</div>
                </div>
                <div class="art_list_item">
                    <div>{{ $product->name}}</div>
                </div>
                <div class="art_list_item ">
                    <H4><div class="art_list_item font-weight-bolde">{{$product->description}}</div></H4>
                </div>
                <div class="art_list_item">
                    <div>{{$product->category["category_name"]}}</div>
                </div>
 {{-- <h6>Colores :</h6>
                <div class="art_list_item_colors">
                    @foreach ($product->colors as $color)
                    <div class="art_list_colors_each">
                        {{$color->color_name}}
                    </div>
                @endforeach
                </div>
<h6>Talles :</h6>
                <div class="art_list_item_colors">
                    @foreach ($product->sizes as $size)
                    <div class="art_list_colors_each">
                        {{$size->size_name}}
                    </div>
                    @endforeach
                </div> --}}
                <div class="art_price">
                    <p class="art_price">$  {{number_format( $product->price, 2, ",", "." ) }}</p>
                    <p class="art_price" style = "color:red">Off  {{number_format( $product->discount_porcent, 2, ",", "." ) }}%</p>
                </div>
                <div class="art_cart_btn">
                    <a href="{{ url ('/artic',$product->id) }}" class="btn btn-register cart_btn " role="button"><i class="fas fa-shopping-cart">Ver Articulo</i></a>
                </div>
                <br>


        </div>

         @endif

         @empty
         <li class="product_list_row"><p class="product_list_item">No hay productos registrados.</p>
         </li>
         @endforelse
    </div>
</div>


@endsection
{{--
<div class="art_list_photo carousel-item active"><img src="{{ route('art_list_images')}}" alt="imagen producto"> --}}

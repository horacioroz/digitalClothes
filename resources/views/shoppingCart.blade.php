@extends('layouts.master')
@section('content')

<div class="shp_container col-12">
    <main class="shp_main">
        @if (Session::has('cart'))
        {{-- @dd($cart); --}}
        <section class="shp_left col-xs-12 col-xl-7">
                <ul class="list-group">
        @foreach($products as $product)
            <div class="row shp_item">
                    {{-- @dd($products); --}}
                    <article class="shp_art">
                        <li class="list-group-item">
                            <div class="shp_prod">
                                <strong>{{$product['item']['name']}}</strong>
                                <img src="{{ asset('images/foto_1.jpg') }}" alt="imagen foto 1" >
                                <div class="shp_art_desc">
                                <p>Color: {{$product['item']['color']}}</p>
                                <p>Talle: 38 Regular</p>
                                <p>Item#: {{$product['item']['id']}}</p>
                                </div>
                            </div>
                            <div class="shp_quant">
                                <a href="#"><i class="fas fa-plus fa-align-center"></i></a>
                                <input class="shp_quantity" type="text" name="qty" value="{{$product['qty']}}" placeholder="{{$product['qty']}}" >
                                <a href="#"><i class="fas fa-minus fa-align-center"></i></a>
                            </div>
                            <div class="shp_price">
                                <span class="shp_price_offer label label-success">
                                    $ {{$product['item']->price_with_discount}}
                                </span>
                                <span class="shp_price_regular label label-success">   $ {{number_format( $product['item']['price'], 2, ",", "." ) }}</span>
                                <span class="shp_price_save label label-success">{{number_format( $product['item']['discount_porcent'], 2, ",", "." ) }} %</span>
                            </div>
                        </li>
                    </article>
        </div>
    @endforeach
            </ul>
    </section>
    <section class="     col-xs-12 col-xl-4">
        <div class="shp_right_square">
            <article class="shp_total_titles">
                <p class="shp_total_subtot">Subtotal</p>
                <p class="shp_total_ship">Standard Shipping</p>
                <p class="shp_total_ship_desc">Shipping Discount</p>
                <p class="shp_total_tax">Sales Tax</p>
                <p class="shp_total_saves">Total Savings</p>
                <p class="shp_total_estimated">Estimated Total</p>
            </article>
            <article class="shp_total_amount">
                <p class="shp_total_subtot">$150</p>
                <p class="shp_total_ship">$10</p>
                <p class="shp_total_ship_desc">-$10</p>
                <p class="shp_total_tax">$0</p>
                <p class="shp_total_saves">-$350</p>
                <p class="shp_total_estimated">$150</p>
            </article>
        </div>
        <article class="shp_checkout_btn ">
            <p>CHECKOUT</p>
        </article>
    </section>
    @else
    @endif
</main>
</div>
@endsection

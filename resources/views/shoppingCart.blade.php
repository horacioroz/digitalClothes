@extends('layouts.master')
@section('content')

<div class="shp_container col-12">
    <main class="shp_main">
        @foreach($items as $item)
        <section class="shp_left col-xs-12 col-xl-7">
            <article class="shp_art">
                <img src="{{ asset('images/foto_1.jpg') }}" alt="imagen foto 1" >
                <div class="shp_art_desc">
                    <p class="shp_art_name">{{ $product->name }}</p>
                    {{-- COLOR --}}
                    <div class="form-group-edit">
                        <label for="category_id">Color</label>
                        <select class="product_category_id_ul">
                            @foreach($colors as $color)
                            <option class="form-control product_category_id_item" value={{$color}}
                            @if($product->color_id == old('color_id', $color->id))
                            selected
                            @endif>{{$color->color_name}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('color_id','<span  class=error>:message</span>') !!}
                    </div>
                    <p>Color: Celeste</p>
                    <p>Talle: 38 Regular</p>
                    <p>Item#: 1234566778</p>
                    {{-- Falta Edit y Remove --}}
                </div>
                <div class="shp_quant">
                    <a href="#"><i class="fas fa-plus fa-align-center"></i></a>
                    <input class="shp_quantity" type="text" name="" >
                    <a href="#"><i class="fas fa-minus fa-align-center"></i></a>
                </div>
                <div class="shp_price">
                    <p class="shp_price_offer">$150</p>
                    <p class="shp_price_regular">$400</p>
                    <p class="shp_price_save">62,5%</p>
                </div>
        </section>
            </article>
            @endforeach
        <section class="shp_right col-xs-12 col-xl-4">
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
    </main>
</div>
@endsection

@extends('layouts.master')
@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail"><img src="" alt=""></div>
                <div class="caption">
                    <h3>{{ $product->name }}</h3>
                    <p class="description">$  {{ $product->description }}</p>
                    <div class="clearfix">
                        <div class="pull-left price">
                            {{ $product->price}}
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection

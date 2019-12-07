
@extends('layouts.master')
@section('content')
<div class="art-view-global">
<div class="breadcrumbmain-art-view">
    <nav aria-label="breadcrumb row ">
        <ol class="breadcrumb-art-view">
            <li class="breadcrumb-item"><a href="#">Hombre</a></li>
            <li class="breadcrumb-item"><a href="#">Remeras</a></li>
            <li class="breadcrumb-item active" aria-current="page">Remera1</li>
        </ol>
    </nav>
</div>
<div class="productcontainer-art-view">
    <div class="column-art-view">
        <a href=""><article class=""><img src="{{ asset('images/remera1.jpg') }}" alt=""></article></a>
        <a href=""><article class=""><img src="{{ asset('images/remera1.jpg') }}" alt=""></article></a>
        <a href=""><article class=""><img src="{{ asset('images/remera1.jpg') }}" alt=""></article></a>
        <a href=""><article class=""><img src="{{ asset('images/remera1.jpg') }}" alt=""></article></a>
    </div>
    <div class="">
        <div class="bigproduct-art-view">
            <div id="carouselExampleIndicators" class="carousel slide bigproductcontent-art-view " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

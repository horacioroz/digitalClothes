@extends('layouts.master')
@section('content')
<div class="titulo_vista">
    <h1>Remeras</h1>
</div>
<div class="container_vista row">
    <div class="filtros_vista ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb-vista">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Remeras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
            </ol>
        </nav>
        <div class="dropdownmenu_vista">
            <h6 class="dropdown-header">Color</h6>
            <a class="dropdown-item" href="#">Rojo</a>
            <a class="dropdown-item" href="#">Azul</a>
            <a class="dropdown-item" href="#">Verde</a>
            <a class="dropdown-item" href="#">Negro</a>
        </div>
        <div class="dropdownmenu_vista">
            <h6 class="dropdown-header">Talle</h6>
            <a class="dropdown-item" href="#">9,5</a>
            <a class="dropdown-item" href="#">10</a>
            <a class="dropdown-item" href="#">10,5</a>
            <a class="dropdown-item" href="#">11</a>
        </div>
        <div class="dropdownmenu_vista">
            <h6 class="dropdown-header">Marca</h6>
            <a class="dropdown-item" href="#">Lacoste</a>
            <a class="dropdown-item" href="#">Hollister</a>
            <a class="dropdown-item" href="#">Abercrombie</a>
            <a class="dropdown-item" href="#">H&M</a>
        </div>
    </div>
    <div class="row lista_vista ">
        <article   class="">
            <div id="carouselExampleIndicators" class="carousel slide lista_vista_slider " data-touch="true" data-interval="0">
                <ol class="carousel-indicators " >
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active " >
                      <a href="#">  <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="..."> </a>
                  </div>
                  <div class="carousel-item">
                      <a href="#">  <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="..."> </a>
                  </div>
                  <div class="carousel-item">
                      <a href="#">  <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="..."> </a>
                  </div>
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
        <div class="p_vista">
            <a href="#">
                <h1 class="pprice_vista">40$</h1>
                <h1 class="pname_vista">Remera Azul</h1>
                <p class="pdesc_vista">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>
            </a>
        </div>
    </article>
    <article   class="">
        <div id="carouselExampleIndicators1" class="carousel slide lista_vista_slider " data-touch="true" data-interval="0">
            <ol class="carousel-indicators " >
                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active " >
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
            </div>
            <a class="carousel-control-prev  " href="#carouselExampleIndicators1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="p_vista">
            <a href="#">

                <h1 class="pprice_vista">40$</h1>

                <h1 class="pname_vista">Remera Azul</h1>

                <p class="pdesc_vista">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>



            </a>
        </div>



    </article>

    <article   class="">


        <div id="carouselExampleIndicators2" class="carousel slide lista_vista_slider " data-touch="true" data-interval="0">
            <ol class="carousel-indicators " >
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active " >
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
            </div>
            <a class="carousel-control-prev  " href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="p_vista">
            <a href="#">
                <h1 class="pprice_vista">40$</h1>
                <h1 class="pname_vista">Remera Azul</h1>
                <p class="pdesc_vista">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>
            </a>
        </div>
    </article>
    <article   class="">
        <div id="carouselExampleIndicators" class="carousel slide lista_vista_slider " data-touch="true" data-interval="0">
            <ol class="carousel-indicators " >
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active " >
                    <a href="#">  <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera1.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
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
        <div class="p_vista">
            <a href="#">
                <h1 class="pprice_vista">40$</h1>
                <h1 class="pname_vista">Remera Azul</h1>
                <p class="pdesc_vista">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>
            </a>
        </div>
    </article>
    <article   class="">
        <div id="carouselExampleIndicators1" class="carousel slide lista_vista_slider " data-touch="true" data-interval="0">
            <ol class="carousel-indicators " >
                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active " >
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
            </div>
            <a class="carousel-control-prev  " href="#carouselExampleIndicators1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="p_vista">
            <a href="#">
                <h1 class="pprice_vista">40$</h1>
                <h1 class="pname_vista">Remera Azul</h1>
                <p class="pdesc_vista">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>
            </a>
        </div>
    </article>
    <article   class="">
        <div id="carouselExampleIndicators2" class="carousel slide lista_vista_slider " data-touch="true" data-interval="0">
            <ol class="carousel-indicators " >
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active " >
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <a href="#">  <img src="{{ asset('images/remera2.jpg') }}" class="d-block w-100" alt="..."> </a>
                </div>
            </div>
            <a class="carousel-control-prev  " href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="p_vista">
            <a href="#">
                <h1 class="pprice_vista">40$</h1>
                <h1 class="pname_vista">Remera Azul</h1>
                <p class="pdesc_vista">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>
            </a>
        </div>
    </article>
</div>
<div class="pags_vista row ">
    <ul class="pages">
        <li><a href="#"><i class="fas fa-arrow-left"></i></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
    </ul>
</div>
@endsection

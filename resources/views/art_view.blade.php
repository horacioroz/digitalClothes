@extends('layouts.master')
@section('content')



<div class="art_view_container">
    <section class="art_view_left_container">
        <div class="art_view_router">
          inicio / articulo / ventas
      </div>
      <div class="art_view_container_photo_small">
        <div class="art_view_photo">
            {{-- src="{{ asset('images/foto_1.jpg') }}" --}}
            <img src="{{ asset('images/foto_1.jpg') }}" alt="imagen foto 1" >
        </div>
        <div class="art_view_photo">
            <img src="{{ asset('images/foto_1.jpg') }}" alt="imagen foto 1" >
        </div>
        <div class="art_view_photo">
            <img src="{{ asset('images/foto_1.jpg') }}" alt="imagen foto 1">
        </div>
        <div class="art_view_photo">
            <img src="{{ asset('images/foto_1.jpg') }}" alt="imagen foto 1">
        </div>
        <div class="art_view_photo">
            <img src="{{ asset('images/foto_1.jpg') }}" alt="imagen foto 1">
        </div>
        <div class="art_view_photo">
            <img src="{{ asset('images/foto_1.jpg') }}" alt="imagen foto 1">
        </div>
    </div>
</section>
<section class="art_view_center_container">
    <div class="art_view_photo_big">
        <img src="{{ asset('images/foto_1.jpg') }}" alt="photo big">
    </div>
    <div class="art_view_detail">
        Detalles
    </div>
    <div class="art_view_detail_list">
        <ul>
            <li>colores de los aticulos</li>
            <li>tipo de telas </li>
            <li>atributos de las articulos</li>
            <li>bdljfadbjlfbb bfjdbfjbd dbfjdbfkjsd</li>
            <li>fbdljbfljdb fbdjbfds df bodbfjd d fds</li>
            <li>reqrewr wfwefw feqfe</li>
        </ul>
    </div>
    <div class="art_view_code">
        <p href="">  cod 000001234</p>
    </div>
    <div class="art_view_returns">
        Correo y Devoluciones
    </div>
    <div class="art_view_list_returns">
        <p><strong>Envio</strong>
            El envio se realiza por correo argentino puede ser a sucursal o a domiciodependiendo de lo que solicite el comprador.
            Los tiempos de entrega son aproximadamente de 3 a 5 dias.
            <strong>Devoluciones:</strong>
            Se realizan previo envio de mail.
            Solo en caso de falla del producto.
        </p>
    </div>
</section>
<section class="art_view_right_container">
    <div class="art_view_description">
        <h3 class="art_view_product_name">Nombre del Producto</h3>
        <p>Variable Descripcion con dos lineas por el largo de la mismos</p>
        <p class="art_view_sale_price">$800</p>
        <p class="art_view_regular_price">$800</p>
        <p class="art_view_save">$800</p>
    </div>

    <div class="art_view_colours">
        <h2>colores</h2>
        <div class="art_view_box_colours">
            <img src="{{ asset('images/color_rojo.png') }}"   alt="logo color rojo" >
        </div>
        <div class="art_view_size">
            <h2>Talle</h2>
            {{-- <div class="art_view_box_size"> --}}
                <img src="{{ asset('images/XL.png') }}"   alt="logo color rojo" >
            {{-- </div> --}}
            <div class="art_view_purchase">
                <div class="art_view_quantity">
                    <h1>1</h1>
                </div>
                <div class="art_view_sum">
                    <img src="{{ asset('images/signo_suma.jpg') }}" alt="signo suma" >
                </div>
                <div class="art_view_carrier">
                    <p>Agregar al carrito</p>
                </div>
            </div>
            <div class="art_view_socialred">
                <ul>
                    <li>
                        <a class="social-icon" title="Facebook" href="">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a class="social-icon" title="Instagram" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a class="social-icon" title="Pinterest" href="">
                            <i class="fab fa-pinterest-square"></i>
                        </a>
                    </li>
                    <li>
                        <a class="social-icon" title="Youtube" href="">
                            <i class="fab fa-youtube-square"></i>
                        </a>
                    </li>
                    <li>
                        <a class="social-icon" title="Twitter" href="">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>
                    {{-- width="30%"height="30%" --}}
                </ul>
            </div>
            <div class="art_view_box_sale">
                15 % off
                <br>
                con Digital-Card
            </div>
        </div>
    </div>
</section>
</div>

@endsection






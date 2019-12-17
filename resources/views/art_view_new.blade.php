
@extends('layouts.master')
@section('content')

<div class="maincontainer-register">
    <h1>{{$product->name}}</h1>

    <div class="col-12 col-md-8 container-register-edit">

            <div class="form-user-edit">
                <div class="form-group-edit">
                    {{-- <input type="hidden" name="id" value="{{$product->id}}"> --}}

                {{-- DESCRIPTION --}}
                <div class="form-group-edit ">
                    <label for="description">Descripción</label>
                    <div class="" >{{ $product->description }}</div>
                </div>
                {{-- CATEGORY --}}

                {{-- COLORS --}}
                <div class="form-group-edit form-group ">
                    <label for="color">Color</label>
                    {!!Form::select('color.color_id', $colors->pluck('color_name'), $product->colors, array('class'=>'product_category_id_ul selectpicker form-control color_select', 'name' => 'colors'))!!}
                    {!! $errors->first('color','<span  class=error>:message</span>') !!}
                    {{-- debe guardar las combinaciones en la tabla pivot  --}}
                </div>
                {{-- SIZES --}}
                <div class="form-group-edit  form-group ">
                    <label for="size">Talles</label>
                    {!!Form::select('size.size_id', $sizes->pluck('size_name'), $product->sizes, array('class'=>'product_category_id_ul selectpicker form-control color_select', 'name' => 'sizes'))!!}
                    {!! $errors->first('size','<span  class=error>:message</span>') !!}
                </div>
            </div>
            {{-- debe guardar las combinaciones en la tabla pivot  --}}

            <div class="form-user-edit">
                {{-- PRICE --}}
                <div class="form-group-edit form-group ">
                    <label for="price">Precio</label>
                    <input class="form-control price" type="" aria-describedby="price" required name="price" value="  {{money_format('%(#10n', $product->price) }}" placeholder="">
                    {!! $errors->first('price','<span  class=error>:message</span>') !!}
                </div>
                {{-- DISCOUNT --}}
                <div class="form-group-edit form-group ">
                    <label for="discount_porcent">Descuento</label>
                    <input  class="form-control placeholder-register" type="" name="discount_porcent" value="{{number_format( $product->discount_porcent, 2, ".", "," ) }}" placeholder= "" >
                    {!! $errors->first('discount_porcent','<span  class=error>:message</span>') !!}
                </div>
            </div>
            {{-- PHOTO --}}
            <div class="form-user-edit">
                <div class="form-group-edit thumbs ">
                    <label for="prod_img">Foto</label>
                    {{-- AGREGADO PARA DROPZONE --}}
                    <div class="container">
                        <div class="row"  >
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                   <div class="dropzone" id="myDropzone"></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               {{-- TOMA IMÁGENES YA CARGADAS --}}

               {{-- Si pudiera hacer que el Dropzone las tomara, me evitaría este paso que aparte queda feo --}}

               @forelse($images as $image)
               @if($image->product_id==$product->id && $image->active==1)
               <div class="thumb" id="prueba"><img src="{{url('storage/images/products', $image->image_name)}}" alt="imagen producto">
                <br>
                <a href="{{url('product_image_destroy',$image->id)}}">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </div>
            @endif
            @empty
            <p>No hay fotos seleccionadas.</p>
            @endforelse
        </div>
    </div>
    <button class=" btn btn-register " type="submit" id="sbmtbtn">Guardar</button>
</div>
</div>

{{-- <div class="art-view-global">
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
</div> --}}
@endsection

@extends('layouts.admin')
@section('content')


<div class="maincontainer-register">
    <h1>Editando Producto: {{$product->id}}</h1>
    <div class="col-12 col-md-8 container-register-edit ">
        <form class="form " method="POST" enctype="multipart/form-data" action='{{ "route('product_update'),$product->id" }}' novalidate >{{-- saque del action singup --}}
            {{method_field('PUT')}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    <input type="hidden" name="id" value="{{$product->id}}">
                    {{-- {{dd($product)}} --}}
                    <label for="name">Nombre</label>
                    <input class="form-control "type="text" required name="name" value="{{ $product->name }} " placeholder="">
                    {!! $errors->first('name','<span  class=error>:message</span>') !!}
                </div>
                <div class="form-group-edit ">
                    <label for="description">Descripción</label>
                    <input class="form-control "type="text" required name="description" value="{{ $product->description }}" placeholder="">
                    {!! $errors->first('description','<span  class=error>:message</span>') !!}
                </div>

            <div class="form-group-edit product_category_id ">
                <label for="category_id">Categoría</label>
                <select class="product_category_id_ul">
                    @forelse($categories as $category)
                        <option class="form-control product_category_id_item" value={{$category }}
                            @if($product->category_id == old('category_id', $category->id))
                                selected = "selected"
                            @endif

                        > {{$category->category_name}}

                        </option>|
                    @empty
                        <option>No hay categorías registradas.</option>
                    @endforelse
                </select>
                {!! $errors->first('category_id','<span  class=error>:message</span>') !!}
            </div>
            <div class="form-group-edit product_category_id ">
                <label for="color">Color</label>
                <select class="product_category_id_ul">
                    @forelse($colors as $color)
                        <option class="form-control product_category_id_item" value={{$color}}
                            @if($product->color == old('category_id', $category->id))
                                selected = "selected"
                            @endif

                        > {{$color->color_name}}

                        </option>|
                    @empty
                        <option>No hay colores registradas.</option>
                    @endforelse
                </select>
                {!! $errors->first('color','<span  class=error>:message</span>') !!}
            </div>
{{--             <div class="form-group-edit ">
                <label for="color">Color</label>
                <input class="form-control "type="checkbox" aria-describedby="color" required name="color" value="{{$product->color }}" placeholder="">
                {!! $errors->first('color','<span  class=error>:message</span>') !!}
            </div>
 --}}            <div class="form-group-edit ">
                <label for="size">Talles</label>
                <input class="form-control "type="checkbox" aria-describedby="size" required name="size" value="{{$product->size }}" placeholder="">
                {!! $errors->first('size','<span  class=error>:message</span>') !!}
{{--                 Hay que hacer el for supongo que en el controller para que cuando se ingrese la categoría aparezca el tipo de talles que al ser campo type checkbox vamos a poder marcar los que son--}}
            </div>
            <div class="form-group-edit ">
                <label for="price">Precio</label>
                <input class="form-control "type="number" aria-describedby="price" required name="price" value="{{$product->price }}" placeholder="">
                {!! $errors->first('price','<span  class=error>:message</span>') !!}
            </div>

            <div class="form-group-edit ">
                <label for="discount_porcet">Descuento</label>
                <input  class="form-control placeholder-register" type="checkbox" name="discount_porcet" value="{{ $product->discount_porcet }}" placeholder= "" >
                {{-- pattern="[+0-9]{3}-[0-9]{3}-[0-9]{4}-[0-9]{4}" --}}
               {{-- {!! $errors->first('password','<span  class=error>:message</span>') !!} --}}
               {{-- En el placeholder número de teléfono válido sin guiones ej: 01159808983 y en error si no es numérico --}}
            </div>

            <div class="form-group-edit ">
                <label for="prod_img">Foto</label>
                {{-- <input type="file"> --}}
                <input  class="form-control placeholder-register" type="file" name="avatar" value="{{'storage/', $product->prod_img}}" placeholder="{{'storage/', $product->prod_img}}">
            </div>
               {{-- {!! $errors->first('password','<span  class=error>:message</span>') !!} --}}
               {{-- Debe haber una api de códigos postales después de saber provincia y ciudad --}}
            <div class="form-group-edit ">
                <div class="user_profile_avatar">
                <img src="{{url('storage/images/products', $product->prod_img)}}" alt="imagen producto">
                </div>
            </div>
        </div>

            <button class=" btn btn-register " type="submit" >Guardar</button>

        </form>
    </div>
</div>
@endsection

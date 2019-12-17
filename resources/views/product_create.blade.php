@extends('layouts.admin')
@section('content')

<div class="maincontainer-register">
    <h1>Crear Producto</h1>
    <div class="col-12 col-md-8 container-register-edit">
        <form class="form" id="frmTarget" method="POST" enctype="multipart/form-data" action='{{ "route('product_create')" }}'  novalidate id="mydropzone" >
            {{-- {{method_field('PUT')}} --}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    <input type="hidden" name="id" value="">
                    {{-- NAME  --}}
                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" required name="name" value="" placeholder="">
                    {!! $errors->first('name','<span  class=error>:message</span>') !!}
                </div>
                {{-- DESCRIPTION --}}
                <div class="form-group-edit ">
                    <label for="description">Descripción</label>
                    <input class="form-control " type="text" required name="description" value="" placeholder="">
                    {!! $errors->first('description','<span  class=error>:message></span>') !!}
                </div>
                {{-- CATEGORY --}}
                <div class="form-group-edit">
                    <label for="category_id">Categoría</label>
                    <select class="product_category_id_ul">
                        {{-- @dd($categories); --}}
                            @foreach($categories as $category)
                            <option class="form-control product_category_id_item" value="{{$category->category_id }}">{{$category->category_name}}
                            </option>

                        @endforeach
                        </select>
                        {!! $errors->first('category_id','<span  class=error>:message</span>') !!}
                    </div>
                {{-- COLORS --}}
                    <div class="form-group-edit form-group ">
                        <label for="color">Color</label>
                        {!!Form::select('color.color_id', $colors->pluck('color_name'), array('class'=>'product_category_id_ul selectpicker form-control color_select','multiple' => true, 'name' => 'colors[]'))!!}
                        {!! $errors->first('color','<span  class=error>:message</span>') !!}
                    {{-- debe guardar las combinaciones en la tabla pivot  --}}
                    </div>
                {{-- SIZES --}}
                    <div class="form-group-edit  form-group ">
                        <label for="size">Talles</label>
                        {!!Form::select('size.size_id', $sizes->pluck('size_name'),  array('class'=>'product_category_id_ul selectpicker form-control color_select','multiple' => true, 'name' => 'sizes[]'))!!}
                        {!! $errors->first('size','<span  class=error>:message</span>') !!}
                    </div>
                </div>
                <div class="form-user-edit">
                {{-- PRICE --}}
                    <div class="form-group-edit form-group ">
                        <label for="price">Precio</label>
                        <input class="form-control price" type="" aria-describedby="price" required name="price" value="" placeholder="">
                        {!! $errors->first('price','<span  class=error>:message</span>') !!}
                    </div>
                {{-- DISCOUNT --}}
                    <div class="form-group-edit form-group ">
                        <label for="discount_porcent">Descuento</label>
                        <input  class="form-control placeholder-register" type="" name="discount_porcent" value="" placeholder= "" >
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
                </div>
            <button class=" btn btn-register " type="submit" id="sbmtbtn">Guardar</button>
        </form>
    </div>
</div>
@endsection
    @section('scripts')
    <script>
        Dropzone.options.myDropzone = {
            url: '{{ route('product_image_store',$product->id) }}',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        }
    </script>
    @endsection


@extends('layouts.admin')
@section('content')

<div class="maincontainer-register">
    <h1>Editando Producto: {{$product->id}}</h1>
    <div class="col-12 col-md-8 container-register-edit">
        <form class="form" id="frmTarget" method="POST" enctype="multipart/form-data" action='{{ "route('product_update'),$product->id" }}' novalidate id="mydropzone" >
            {{method_field('PUT')}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    <input type="hidden" name="id" value="{{$product->id}}">
                    {{-- NAME  --}}
                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" required name="name" value="{{ $product->name }} " placeholder="">
                    {!! $errors->first('name','<span  class=error>:message</span>') !!}
                </div>
                {{-- DESCRIPTION --}}
                <div class="form-group-edit ">
                    <label for="description">Descripción</label>
                    <input class="form-control "type="text" required name="description" value="{{ $product->description }}" placeholder="">
                    {!! $errors->first('description','<span  class=error>:message></span>') !!}
                </div>
                {{-- CATEGORY --}}
                <div class="form-group-edit">
                    <label for="category_id">Categoría</label>
                    <select class="product_category_id_ul">
                        @forelse($categories as $category)
                        <option class="form-control product_category_id_item" value={{$category }}
                        @if($product->category_id == old('category_id', $category->id))
                        selected
                        @endif>{{$category->category_name}}</option>
                        @empty
                        <option>No hay categorías registradas.</option>
                        @endforelse
                    </select>
                    {!! $errors->first('category_id','<span  class=error>:message</span>') !!}
                </div>
                {{-- COLORS --}}
                <div class="form-group-edit form-group ">
                    <label for="color">Color</label>
                    {!!Form::select('color.color_id', $colors->pluck('color_name'), $product->colors, array('class'=>'product_category_id_ul selectpicker form-control color_select','multiple' => true, 'name' => 'colors[]'))!!}
                    {!! $errors->first('color','<span  class=error>:message</span>') !!}
                    {{-- debe guardar las combinaciones en la tabla pivot  --}}
                </div>
                {{-- SIZES --}}
                <div class="form-group-edit  form-group ">
                    <label for="size">Talles</label>
                    {!!Form::select('size.size_id', $sizes->pluck('size_name'), $product->sizes, array('class'=>'product_category_id_ul selectpicker form-control color_select','multiple' => true, 'name' => 'sizes[]'))!!}
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
<script>

$('#colors').click(function (e) {
//se consigue todos los valores seleccionados en el select multipleen este caso el valor que se consigue en el atributo value es un identificador del producto
this.seleccion  = $(this).val();

//se limpia el div para imprimir
// $('#imprimir').html('');

//se valida que this.seleccion sea mayor a 0
if ( this.seleccion.length > 0 ) {
//se recorren todos los valores seleccionados en el select products
for (var i = 0; i=this.seleccion.length; i++) {
    this.color = $("#colors [value='" + this.seleccion[i] + "']").attr('color.color_id');
}
}
});

    console.log('color_color_id');

    $('#imprimir').on('keyup', '.accion', function(event) {
        event.preventDefault();
//identificador del input
this.i = $(this).attr('data-i');

this.numero_uno = parseInt( $(this).val() );
this.numero_dos = parseInt( $('#cambio' + this.i ).text() );

//cada vez que hacemos un cambio a #products
//el valor del input .accion se pierde ya que lo dibuja desde 0
//para evitar esto, en esta linea se lo asigno a un atributo para guardarlo
$("#products [value='" + this.i + "']").attr('data-cambio', $(this).val() );

//resta del stock con la cantidad del input .accion
this.nueva_cantidad = this.numero_dos - this.numero_uno;

//cambiando la cantidad en stock
$('#nueva_cantidad' + this.i ).text( this.nueva_cantidad );

});
</script>
{{-- <script>
var pullfiles=function(){
// love the query selector
var fileInput = document.querySelector("#fileItem");
var files = fileInput.files;
// cache files.length
var fl = files.length;
var i = 0;

while ( i < fl) {
// localize file var in the forloop.first
var file = files[i];
console.log(file.name);
i++;
}
}
// set the input element onchange to call pullfiles
document.querySelector("#fileItem").onchange=pullfiles;
//a.t
</script> --}}
@endsection


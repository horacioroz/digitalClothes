@extends('layouts.admin')
@section('content')



<div class="maincontainer-register">
    <h1>Editando Producto: {{$product->id}}</h1>
    <div class="col-12 col-md-8 container-register-edit">
        <form class="form " method="POST" enctype="multipart/form-data" action='{{ "route('product_update'),$product->id" }}' novalidate >
            {{method_field('PUT')}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    <input type="hidden" name="id" value="{{$product->id}}">
                    {{-- NAME  --}}
                    <label for="name">Nombre</label>
                    <input class="form-control "type="text" required name="name" value="{{ $product->name }} " placeholder="">
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
                    {!!Form::select('color.color_id', $colors->pluck('color_name'), $product->colors, array('class'=>'product_category_id_ul selectpicker form-control color_select','multiple' => true))!!}
                    {!! $errors->first('color','<span  class=error>:message</span>') !!}
                </div>
                {{-- SIZES --}}
                <div class="form-group-edit  form-group ">
                    <label for="size">Talles</label>
                    {!!Form::select('size.size_id', $sizes->pluck('size_name'), $product->sizes, array('class'=>'product_category_id_ul selectpicker form-control color_select','multiple' => true))!!}
                    {!! $errors->first('size','<span  class=error>:message</span>') !!}
                </div>
            </div>
            <div class="form-user-edit">
                {{-- PRICE --}}
                <div class="form-group-edit form-group ">
                    <label for="price">Precio</label>
                    <input class="form-control " type="" aria-describedby="price" required name="price" value="$  {{number_format( $product->price, 2, ",", "." ) }}" placeholder="">
                    {!! $errors->first('price','<span  class=error>:message</span>') !!}
                </div>
                {{-- DISCOUNT --}}
                <div class="form-group-edit form-group ">
                    <label for="discount_porcent">Descuento</label>
                    <input  class="form-control placeholder-register" type="" name="discount_porcent" value="%  {{number_format( $product->discount_porcent, 2, ",", "." ) }}" placeholder= "" >
                </div>
            </div>
                {{-- PHOTO --}}
                <div class="form-user-edit">
                <div class="form-group-edit thumbs ">
                    <label for="prod_img">Foto</label>
 {{--                    <form action="{{ url('images/products')}}" class="dropzone" id="my-dropzone">
                        aaa
                    </form>
  --}}               {{--     <input  class="form-control placeholder-register" type="file" name="photo[]" accept="gif|jpg|jpeg|png"  id="fileItem" maxlength="6" multiple= "multiple" placeholder="{{'storage/', $product->prod_img}}">

                    {!!$result->input('name')!!}
                    @while($line = $result->mysql_fetch_assoc() )
                    {{$line = <tr><td><a href="javascript:;" onkeyup=" pullfiles(.$fila['photo']. )"></a>;
                    $line .= $fila["file.name"] . </td></tr>;
                    echo $line;}}
                    @endwhile --}}
{{-- AGREGADO PARA DROPZONE --}}





                     {{-- @section('content') --}}
    {{-- <div class="container">
        <div class="row"    >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Dropzone
                </div>
                <div class="panel-body">
    <div class="dropzone dropzone-file-area" id="my-dropzone">
                    <div class="dropzone" id="myDropzone" >
                    {!! Form::open(['route'=> 'file.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                        <div class="dz-message" style="height:200px;">
                            Drop your files here
                        </div>
                     </div>
                    <div class="dropzone-previews"></div>
                    <button type="submit" class="btn btn-success" id="submit">Save</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> --}}
 {{-- @endsection --}}
{{-- <form role="form" enctype="multipart/form-data">
    <input hidden id="file" name="file"/>
    <div class="dropzone dropzone-file-area" id="fileUpload">
        <div class="dz-default dz-message">
            <h3 class="sbold">Drop files here to upload</h3>
            <span>You can also click to open file browser</span>
        </div>
    </div>
</form> --}}
{{--  fin de AGREGADO PARA DROPZONE --}}
                    @forelse($images as $image)
                    @if($image->product_id==$product->id && $image->active==1)
                    {{-- @dd($image->product_id); --}}
                    <div class="thumb"><img src="{{url('storage/images/products', $image->image_name)}}" alt="imagen producto">
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
            </div>
                <button class=" btn btn-register " type="submit" >Guardar</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    {{-- {!! Html::script('js/dropzone.js'); !!} --}}
    <script>
        Dropzone.options.fileUpload = {
            url: 'blackHole.php',
            addRemoveLinks: true,
            accept: function(file) {
                let fileReader = new FileReader();
                fileReader.readAsDataURL(file);
                fileReader.onloadend = function() {
                    let content = fileReader.result;
                    $('#file').val(content);
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.classList.add("dz-complete");
            }
        }
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 10,

            init: function() {
                myDropzone = this;
                var submitBtn = document.querySelector("#submit");

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success",
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>
@endsection


@extends('layouts.admin')
@section('content')


<div class="maincontainer-register">
    <h1>Editando Colores</h1>
    <div class="col-12 col-md-8 container-register-edit ">
        <form class="form " method="POST" action= "{{ url('color_edit',$color->id) }}" novalidate >{{-- saque del action singup --}}
            {{method_field('PUT')}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    <input type="hidden" name="id" value="{{$color->id}}">
                    <label for="color">Color  {{$color->id}}</label>
                    <input class="form-control "type="text" required name="colorName" value="{{ $color->color_name }} " placeholder="">
                    {!! $errors->first('colorName','<span  class=error>:message</span>') !!}
                </div>
            </div>
            <button class=" btn btn-register " type="submit" >Guardar</button>
        </form>
        <div class="color-search-group">
            <form action="/color_search" method="GET" class="color-search-form">
                <input type="text" class="color-search-box" name="busqueda">
                <input type="submit" class="color-search"    value="Buscar">
                <a href="{{url('color_create')}}" class="color_add"><i class="fas fa-upload">     Agregar Categoría</i></a>
            </form>
        </div>
    </div>
</div>
@endsection
